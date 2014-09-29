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
?>
<main>
	<div id="schedule">上映スケジュール</div>
	<div id="day">
		<div id="back">
		</div>

        <ul class="days">
    		<li>1/1</li>
    		<li>1/2</li>
            <li>1/2</li>
            <li>1/2</li>
            <li>1/2</li>
            <li>1/2</li>
            <li>1/2</li>
            

        </ul>

		<div id="next">
        </div>
	</div>

	<div id="title">
	       作品名
	</div>

	<ul id="lst">
		<li id="movietime">←</li>
        <li id="movietime">11:00～<br />△</li>
        <li id="movietime">13:00～<br />△</li>
        <li id="movietime">15:00～<br />△</li>
        <li id="movietime">17:00～<br />△</li>
        <li id="movietime">→</li>
    </ul>
    <ul id="lst">
		<li id="movietime">←</li>
        <li id="movietime">11:00～<br />△</li>
        <li id="movietime">13:00～<br />△</li>
        <li id="movietime">15:00～<br />△</li>
        <li id="movietime">17:00～<br />△</li>
        <li id="movietime">→</li>
    </ul>

    <div id="title">
		作品名
	</div>
	
	<ul id="lst">
		<li id="movietime">←</li>
        <li id="movietime">11:00～<br />△</li>
        <li id="movietime">13:00～<br />△</li>
        <li id="movietime">15:00～<br />△</li>
        <li id="movietime">17:00～<br />△</li>
        <li id="movietime">→</li>
    </ul>

    <ul id="lst">
		<li id="movietime">←</li>
        <li id="movietime">11:00～<br />△</li>
        <li id="movietime">13:00～<br />△</li>
        <li id="movietime">15:00～<br />△</li>
        <li id="movietime">17:00～<br />△</li>
        <li id="movietime">→</li>
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

<?php
    include 'foot.php';
?>

