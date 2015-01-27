<?php
	$movieId = $_GET['movieId'];
  header('Content-type: text/html; charset=UTF-8');
  header('Content-Transfer-Encoding: binary');
  $hostName = "localhost";
  $dbmsUser = "root";
  $dbmsPass = ""; 
  $con = mysql_connect($hostName,$dbmsUser,$dbmsPass);
  mysql_set_charset('utf8');
  mysql_select_db("halcinema",$con);
  $date = date("Y-m-d");
  $date3 = date("Y-m-d",mktime(0,0,0,date("m"),date("d")+3,date("Y")));
  $sql = "SELECT * FROM movie WHERE opening_day <= '$date3' AND end_day >= '$date'";
  //タイムスケジュール
  $sql2 = "SELECT * FROM screening_time WHERE date >= '$date' AND date <= '$date3' AND movie_id = $movieId AND movie_id = $movieId ORDER BY date asc ";
  $res = mysql_query($sql,$con);
  $res2 = mysql_query($sql2,$con);
  mysql_close($con);
if(mysql_num_rows($res2) == 0){
	?>
		<p>上映スケジュールがありません</p>
	<?php
  } else {
?>
      <ul id="reserveTimetableDate" class="left">
        <?php
          while ($time = mysql_fetch_array($res2)){
            $d = substr($time['date'],5,strlen($time['date'])-5);
            echo "<li data-date='".str_replace("-", "/", $d)."' data-id='".$time['time_id']."' data-sId='".$time['theater_id']."'>".str_replace("-", "/", $d)."</li>";
          }
        ?>
      </ul>
      <ul id="reserveTimetableTime" class="left">
        <?php
        mysql_data_seek($res2, 0);
          while ($time = mysql_fetch_array($res2)){
            $a = substr($time['start_time'],0,strlen($time['start_time'])-3);
            $c = split(":",$a);
            mysql_data_seek($res, 0);
            while($movie = mysql_fetch_array($res)){
              if($movie['movie_id'] == $time['movie_id']){
                $H = sprintf("%2d",$movie['time']/60);
                $H = ($c[0]+$H);
                $i = $movie['time']%60;
                $i = ($c[1]+$i);
                if($i == 60){
                  $H = $H + 1;
                  $i = sprintf("%02d",0);
                }
                $b = $H.":".$i;
              }
            }
            echo "<li data-time='".$a."-".$b."' data-id='".$time['time_id']."' data-sId='".$time['theater_id']."'>".$a."-".$b."</li>";
          }
        ?>
      </ul>
      <script>
      	var selectDate = <?php echo "'".str_replace("-", "/", $d)." ".$a."-".$b."'" ?>;
      	
      </script>
<?php } ?>