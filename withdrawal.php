<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<link rel="stylesheet" type="text/css" href="css/withdrawal.css">
<title>HAL Cinema</title>
<?php
    include 'head.php';
?>

<main>

    <div id="title">退会ページ</div>

	<h3>下記から理由を選択し、内容確認ボタンを押してください</h3>

	<div class="form">
		退会理由： <select>
			<option>○○だから</option>
			<option>○○だから</option>
			<option>○○だから</option>
		</select>
	</div>

	<div class="form">
		自由入力： <textarea cols="70" rows="10"></textarea>
	</div>

	<div id="button">
		<input type="button" value="入力内容確認">
	</div>

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