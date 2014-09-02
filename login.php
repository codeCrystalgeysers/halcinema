<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<title>HAL Cinema</title>
<?php
    include 'head.php';
?>

<main>

	<div id="leftcolumn">
		<h2>ログインID/パスワードを入力してください</h2>
		<div class="form">ログインIDを入力してください：<input type="text" name="id" /></div>
		<div class="form">パスワードを入力してください：<input type="password" name="pass" /></div>
		<div class="form"><input type="submit" value="ログインする" /></div>
		<div class="form"><a href="#">アカウントをお持ちでない方はこちら…</a></div>
	</div><!--leftcolumn-->

	<div id="rightcolumn">
		<div id="logo">
			<h1>ロゴ</h1>
		</div><!--logo-->
	</div><!--rightcolumn-->

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