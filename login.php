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

	<div id="loginArea">
		<p>ログインID/パスワードを入力してください</p>
		<form action="my.php" method="post" id="formLogin">
            <label for="id">ID:</label><input type="text" class="form" name="id">
            <label for="pass">PW:</label><input type="password" class="form" name="pass">
            <input type="submit" class="form" value="ログイン">
		</form>
		<a href="registration.php" id="mottenai">アカウントをお持ちでない方はこちら</a></div>
	</div><!--#loginarea　デザイン周り考え中！-->

</main>

<?php
    include 'foot.php';
?>