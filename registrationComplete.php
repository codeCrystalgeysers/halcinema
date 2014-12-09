<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/registrationCheck.css">
<title>HAL Cinema</title>
<?php
    include 'head.php';
	
	if(isset($_POST["userName"])) {
		$userName = $_POST["userName"];
	}
	
	if(isset($_POST["userRuby"])) {
		$userRuby = $_POST["userRuby"];
	}
	
	if(isset($_POST["userSex"])) {
		$userSex = $_POST["userSex"];
		
		if($userSex == "男"){
			$sexCode = 0;
		}else{
			$sexCode = 1;
		}
	}
	
	if(isset($_POST["userBirthDate"])) {
		$userBirthDate = $_POST["userBirthDate"];
	}
	
	if(isset($_POST["userID"])) {
		$userID = $_POST["userID"];
	}
	
	if(isset($_POST["userPass"])) {
		$userPass = $_POST["userPass"];
	}
	
	if(isset($_POST["userPhoneNum"])) {
		$userPhoneNum = $_POST["userPhoneNum"];
	}
	
	if(isset($_POST["userMailAddress"])) {
		$userMailAddress = $_POST["userMailAddress"];
	}
	
	if(isset($_POST["userPost"])) {
		$userPost = $_POST["userPost"];
	}
	
	if(isset($_POST["userAddress"])) {
		$userAddress = $_POST["userAddress"];
	}
	
	if(isset($_POST["cardCompany"])) {
		$cardCompany = $_POST["cardCompany"];
	}
	
	if(isset($_POST["cardName"])) {
		$cardName = $_POST["cardName"];
	}
	
	if(isset($_POST["cardNum"])) {
		$cardNum = $_POST["cardNum"];
	}
	
	if(isset($_POST["cardLimit"])) {
		$cardLimit = $_POST["cardLimit"];
	}


	//DB接続
	$con = mysql_connect("localhost","root","");
	
	mysql_query("SET NAMES utf8");

	//DB選択
	mysql_select_db("halcinema",$con);

	//SQL作成
	$sql = "INSERT INTO `user`(user_id,password,user_name,mail_address,sex,birth_date,address,user_ruby,post,tel) VALUES('$userID','$userPass','$userName','$userMailAddress','$sexCode','$userBirthDate','$userAddress','$userRuby','$userPost','$userPhoneNum')";
	
	$sql2 = "INSERT INTO card(user_id,card_number,card_name,expiry_date,card_type) VALUES('$userID','$cardNum','$cardName','$cardLimit','$cardCompany')";
	
	//SQL実行
	$userRegistration = mysql_query($sql,$con);
	$cardRegistration = mysql_query($sql2,$con);
?>

<main>
    <h2>会員登録完了！</h2>
	<p>
		名前：<?= $userName ?><br/>
		カナ：<?= $userRuby ?><br/>
		性別：<?= $userSex ?><br/>
		生年月日：<?= $userBirthDate ?><br/>
		ID：<?= $userID ?><br/>
		パスワード：<?= $userPass ?><br/>
		メアド：<?= $userMailAddress ?><br/>
		〒：<?= $userPost ?><br/>
		住所：<?= $userAddress ?><br/>
		カード会社：<?= $cardCompany ?><br/>
		カード名義：<?= $cardName ?><br/>
		カード番号：<?= $cardNum ?><br/>
		カード期限：<?= $cardLimit ?><br/>
	</p>
</main>


<?php
    include 'foot.php';
?>