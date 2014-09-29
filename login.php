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

<<<<<<< HEAD
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
=======
	<div id="loginArea">
		<p>ログインID/パスワードを入力してください</p>
		<form action="my.php" method="post" id="formLogin">
            <label for="id">ID:</label><input type="text" class="form" name="id">
            <label for="pass">PW:</label><input type="password" class="form" name="pass">
            <input type="submit" class="form" value="ログイン">
		</form>
		<a href="registration.php" id="mottenai">アカウントをお持ちでない方はこちら</a></div>
	</div><!--#loginarea　デザイン周り考え中！-->
>>>>>>> origin/master

</main>

<?php
    include 'foot.php';
?>