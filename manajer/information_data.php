<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="js/index.js"></script>
<link rel="stylesheet" type="text/css" href="css/information_data.css">
<title>HAL Cinema管理者メール</title>


<div id="wrapper">
<?php
	include 'head.php';
?>
	<div class="maintitle">映画情報登録画面</div>
	<div class="main">
		<div class="left_navi">
			<p class="form_name">タイトル登録</p>
			<p class="form_name">スケジュール登録</p>
			<p class="area_name">映画詳細登録</p>
		</div>
		<div class="right_navi">
			<input type="text" class="form">
			<br />
			<input type="text" class="form">
			<br />
			<textarea></textarea>
		</div>
		<input type="button" value="登録する" class="button">
	</div>
</div><!--wrapper-->

<?php
	include 'foot.php';
?>
</html>