<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<script src="js/jq2min.js"></script>
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<title>HAL Cinema</title>
<?php
    include 'head.php';
?>

<main>
<?php
	if(isset($_GET["message"])){
		$message = $_GET["message"];
		echo $message;
	}
?>
	<div id="loginArea">
		<form action="login_check.php" method="post" id="formLogin">
      <div>
        <label for="id">ID</label><input type="text" class="form" name="id">
      </div>
      <div>
        <label for="pass">Pass Word</label><input type="password" class="form" name="pass">
      </div>
      <div>
        <input type="submit" class="form" value="ログイン">
      </div>
		</form>
		<div id="linkOuter"><a href="registration.php" id="link">アカウントをお持ちでない方はこちら</a></div>
  </div>
	<!--#loginarea　デザイン周り考え中！-->
</main>
<?php
    include 'foot.php';
?>
