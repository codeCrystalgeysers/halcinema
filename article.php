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
    $todayMonth = date("n");
    $todayDay = date("d");
    $todayWeek = date("w");
    $todayDate = $todayYear.$todayMonth.$todayDay;
	
    $week = array("日","月","火","水","木","金","土");
    
    //DB接続
    $con = mysql_connect("localhost","root","");
    
    mysql_query("SET NAMES utf8");

    //DB選択
    mysql_select_db("halcinema",$con);
    
    //SQL作成
    $sql = "SELECT movie_id,title,image FROM movie WHERE '$todayDate' >= opening_day && '$todayDate' <= end_day";
    $sql2 = "SELECT s.movie_id , s.theater_id , s.start_time FROM screening_time AS s JOIN movie AS m ON s.movie_id = m.movie_id WHERE '$todayDate' = s.date";
	$sql3 = "SELECT count(*) FROM screening_time AS s JOIN movie AS m ON s.movie_id = m.movie_id WHERE '$todayDate' = s.date";
	
    //SQL実行
    $res = mysql_query($sql,$con);
    $res2 = mysql_query($sql2,$con);
	$res3 = mysql_query($sql3,$con);
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
		$targetMonth = date("n",$targetDateStamp);
		$targetYear = date("Y",$targetDateStamp);
		$targetWeek = date("w",$targetDateStamp);

    	echo "<li id='".$i."' class='week'>".$targetMonth."/".$targetDay."（".$week[$targetWeek]."）</li>";
	}
?>
            </ul>
    	</div>

<?php
	if($row3 = mysql_fetch_array($res3)){
		if($row3[0] != 0){
			while($row = mysql_fetch_array($res)){
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
						if($row2[1] == "T01"){
						$theater = "シアター01";
						}else if($row2[1] == "T02"){
							$theater = "シアター02";
						}else if($row2[1] == "T03"){
							$theater = "シアター03";
						}else if($row2[1] == "T04"){
							$theater = "シアター04";
						}else if($row2[1] == "T05"){
							$theater = "シアター05";
						}else if($row2[1] == "T06"){
							$theater = "シアター06";
						}else if($row2[1] == "T07"){
							$theater = "シアター07";
						}else if($row2[1] == "T08"){
							$theater = "シアター08";
						}			
?>
		<ul class="lst">
            <li class="screen"><?= $row2[2] ?>(<?= $theater ?>)</li>
            <!-- <li class="movietime"></li> -->
        </ul>
<?php
					}
				}
			}
		}
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

