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
	$today = $todayYear.$todayMonth.$todayDay;
	
	$week = array("日","月","火","水","木","金","土");
	
	//DB接続
	$con = mysql_connect("localhost","root","");
	
	mysql_query("SET NAMES utf8");

	//DB選択
	mysql_select_db("halcinema",$con);
	
	//SQL作成
	$sql = "SELECT movie_id,title,image FROM movie WHERE '$today' >= opening_day && '$today' <= end_day";
	$sql2 = "SELECT count(*) FROM movie WHERE '$today' >= opening_day && '$today' <= end_day";
	//SQL実行
	$res = mysql_query($sql,$con);
	$count = mysql_query($sql2,$con);
?>
  
 <div id="contentsWrap">
    <main>
    	<div class="ttt">上映スケジュール</div>
    	<div id="day">
    		<div id="back">
    		</div>

            <ul class="days">
<?php
	while($row = mysql_fetch_array($res)){
?>
				<li><img src='img/<?= $row["image"] ?>.jpg' id='<?= $row["movie_id"] ?>'></li>
<?php
	}
?>

            </ul>

    		<div id="next">
            </div>
    	</div>

    	<div class="ttt">
    	      <!-- 作品名 -->
    	</div>

    	<ul class="lst">
            <li class="movietime">11:00～<br />△</li>
            <li class="movietime">13:00～<br />△</li>
            <li class="movietime">15:00～<br />△</li>
            <li class="movietime">17:00～<br />△</li>
        </ul>
        <ul class="lst">
            <li class="movietime">11:00～<br />△</li>
            <li class="movietime">13:00～<br />△</li>
            <li class="movietime">15:00～<br />△</li>
            <li class="movietime">17:00～<br />△</li>
        </ul>
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

