<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<meta http-equiv=”Content-Script-Type” content=”text/javascript” />
<script src="js/jq2min.js"></script>
<script src="js/common.js"></script>
<script src="js/topSlider.js"></script>
<script src="js/article.js"></script>
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/article.css">
<title>HAL Cinema</title>
<?php
    include 'head.php';
	
	$todayYear = date("Y");
    $todayMonth = date("m");
    $todayDay = date("d");
    $todayWeek = date("w");
	$todayDate = $todayYear.$todayMonth.$todayDay;
	
	if(isset($_GET["num"])){
		$num = $_GET["num"];
		
		if($num > 6){
			header("location:article.php");
			exit;
		}
		
		$todayDay2 = sprintf("%02d", $todayDay + $num);
		$todayDate = $todayYear.$todayMonth.$todayDay2;
	}
	
    $week = array("日","月","火","水","木","金","土");
    
    //DB接続
    $con = mysql_connect("localhost","root","");
    
    mysql_query("SET NAMES utf8");

    //DB選択
    mysql_select_db("halcinema",$con);
    
    //SQL作成
    //$sql = "SELECT movie_id,title,image FROM movie WHERE $todayDate >= opening_day && $todayDate <= end_day";
    //$sql2 = "SELECT s.movie_id , s.theater_id , s.start_time FROM screening_time AS s JOIN movie AS m ON s.movie_id = m.movie_id WHERE $todayDate = s.date";
	//$sql3 = "SELECT count(*) FROM screening_time AS s JOIN movie AS m ON s.movie_id = m.movie_id WHERE $todayDate = s.date";
	//$sql = "SELECT m.title,m.image,s.start_time,s.theater_id FROM movie AS m JOIN screening_time AS s ON m.movie_id = s.movie_id WHERE m.movie_id IN (SELECT s.movie_id FROM screening_time AS s WHERE s.date = '$todayDate')";
	
	//$sql = "SELECT m.title,m.image,s.start_time,s.theater_id FROM movie AS m JOIN screening_time AS s ON m.movie_id = s.movie_id WHERE s.date = '$todayDate'";
	
	$sql = "SELECT m.movie_id,m.title,m.image FROM movie AS m WHERE m.movie_id IN (SELECT s.movie_id FROM screening_time AS s WHERE s.date = '$todayDate')";
	$sql2 = "SELECT m.movie_id,s.start_time,t.theater_name FROM screening_time AS s JOIN movie AS m ON s.movie_id = m.movie_id JOIN theater AS t ON s.theater_id = t.theater_id WHERE s.date = '$todayDate'";
	
    //SQL実行
    $res = mysql_query($sql,$con);
    $res2 = mysql_query($sql2,$con);
	//$res3 = mysql_query($sql3,$con);
?>

<div id="contentsWrap">
    <main>
    	<div class="ttt">上映スケジュール</div>
    	<div id="day">

            <ul class="days">
<?php
	for($i = 0; $i < 7; $i++){
		$targetDateStamp = mktime(0,0,0,$todayMonth,$todayDay + $i,$todayYear);
		$targetDay = date("d",$targetDateStamp);
		$targetMonth = date("m",$targetDateStamp);
		$targetYear = date("Y",$targetDateStamp);
		$targetWeek = date("w",$targetDateStamp);
		
		if($targetDay < 10){
			$targetDay = ltrim($targetDay,"0");
		}
		
		if(isset($num)){
			if($i == $num){
				echo "<li id='".$i."' class='week todayBox'>".$targetMonth."/".$targetDay."<br/>（".$week[$targetWeek]."）</li>";
			}else{
    			echo "<li id='".$i."' class='week'>".$targetMonth."/".$targetDay."<br/>（".$week[$targetWeek]."）</li>";
			}
		}else{
			if($i == 0){
				echo "<li id='".$i."' class='week todayBox'>".$targetMonth."/".$targetDay."<br/>（".$week[$targetWeek]."）</li>";
			}else{
				echo "<li id='".$i."' class='week'>".$targetMonth."/".$targetDay."<br/>（".$week[$targetWeek]."）</li>";
			}
		}
	}
?>
            </ul>
    	</div>
<?php
	$cnt = 0;
	while($row = mysql_fetch_array($res)){
		$cnt++;
?>
  		<div class="sttt">
			<?= $row[1] ?>
    	</div>
        <div class="screenimg">
            <div class="iimmgg">
                <?= $row[2] ?>
            </div>
        </div>
<?php
		mysql_data_seek($res2,0);
		while($row2 = mysql_fetch_array($res2)){
			if($row[0] == $row2[0]){
?>
			<ul class="lst">
         	   <li class="screen"><?= $row2[1] ?>(<?= $row2[2] ?>)</li>
         	   <!-- <li class="movietime"></li> -->
        	</ul>
<?php
			}
		}
	}
	
	if($cnt == 0){
		echo "この日に公開する映画はありません。";
	}
?>
    </main>

    <div id="divide">
        <aside id="subContent">
        <?php
            include 'aside.php';
        ?>
        </aside>
        <div id="links"><!-- 広告 --></div>
    </div>
</div>
<?php
    include 'foot.php';
?>

