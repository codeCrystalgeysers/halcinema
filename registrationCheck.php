<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/registrationCheck.css">
<title>HAL Cinema</title>
<?php
    include 'head.php';
	
	//if(isset($_POST["lastName"])) {
		$lastName = $_POST["lastName"];
	//}
	
	//if(isset($_POST["firstName"])) {
		$firstName = $_POST["firstName"];
	//}
	
	//if(isset($_POST["kanaLastName"])) {
		$kanaLastName = $_POST["kanaLastName"];
	//}
	
	//if(isset($_POST["kanaFirstName"])) {
		$kanaFirstName = $_POST["kanaFirstName"];
	//}
	
	//if(isset($_POST["sex"])) {
		$sex = $_POST["sex"];
	//}
	
	//if(isset($_POST["birthYear"])) {
		$birthYear = $_POST["birthYear"];
	//}
	
	//if(isset($_POST["birthMonth"])) {
		$birthMonth = $_POST["birthMonth"];
	//}
	
	//if(isset($_POST["birthDay"])) {
		$birthDay = $_POST["birthDay"];
	//}
	
	//if(isset($_POST["id"])) {
		$id = $_POST["id"];
	//}
	
	//if(isset($_POST["pass1"])) {
		$pass = $_POST["pass1"];
	//}
	
	//if(isset($_POST["pass2"])) {
			$pass2 = $_POST["pass2"];
	//}
	
	if($pass != $pass2){
		header("location:registration.php?error=pass");
		exit;
	}
	
	//if(isset($_POST["phoneNum"])) {
		$phoneNum = $_POST["phoneNum"];
	//}
	
	//if(isset($_POST["mailAddress"])) {
		$mailAddress = $_POST["mailAddress"];
	//}
	
	//if(isset($_POST["state"])) {
		$state = $_POST["state"];
	//}
	
	if($state == ""){
		header("location:registration.php?error=state");
		exit;
	}
	
	//if(isset($_POST["post"])) {
		$post = $_POST["post"];
	//}
	
	//if(isset($_POST["address"])) {
		$address = $_POST["address"];
	//}
	
	if(isset($_POST["mansion"])) {
		$mansion = $_POST["mansion"];
	}
	
	//if(isset($_POST["company"])) {
		$company = $_POST["company"];
	//}
	
	//if(isset($_POST["cardName"])) {
		$cardName = $_POST["cardName"];
	//}
	
	//if(isset($_POST["cardNum"])) {
		$cardNum = $_POST["cardNum"];
	//}
	
	if(isset($_POST["limitMonth"])) {
		$limitMonth = $_POST["limitMonth"];
		
		if($limitMonth < 10){
			$limitMonth = "0".$limitMonth;
		}
	}
	
	if(isset($_POST["limitYear"])) {
		$limitYear = $_POST["limitYear"];
	}
	
	
	$limitDay = date("t", mktime(0, 0, 0, $limitMonth, $limitYear));
?>

<main>
    <h2>新規会員登録確認画面</h2>
    <div class="formArea">
    	<table>
    		<tr>
    			<td>※性名</td>
                <td>姓&nbsp;：
                	<div class="result"><?= $lastName ?></div>
                    &nbsp;名&nbsp;：
                    <div class="result"><?= $firstName ?></div>
                </td>
    		</tr>
    		<tr>
    			<td>※フリガナ</td>
                <td>セイ&nbsp;：
                	<div class="result"><?= $kanaLastName ?></div>
                    &nbsp;メイ&nbsp;：
                    <div class="result"><?= $kanaFirstName ?></div>
                </td>
    		</tr>
    		<tr>
    			<td>※性別</td>
    			<td>
                    <div class="result"><?= $sex ?></div>
				</td>
    		</tr>
    		<tr>
    			<td>※生年月日</td>
                <td>
                	<div class="birthday"><?= $birthYear ?></div>年
                    <div class="birthday"><?= $birthMonth ?></div>月
                    <div class="birthday"><?= $birthDay ?></div>日
				</td>
    		</tr>
    		<tr>
    			<td>※ログインID</td><td><div class="result"><?= $id ?></div></td>
    		</tr>
    		<tr>
    			<td>※パスワード</td><td><div class="result"><?= $pass ?></div></td>
    		</tr>

    			<td>※電話番号</td><td><div class="result"><?= $phoneNum ?></div></td>
    		</tr>
			<tr>
    			<td>※メールアドレス</td><td><div class="result"><?= $mailAddress ?></div></td>
    		</tr>
			<tr>
    			<td>※郵便番号</td><td>〒<div class="result"><?= $post ?></div></td>
    		</tr>
    		<tr>
    			<td>※都道府県</td><td><div class="result"><?= $state ?></div></td>
	    	</tr>
    		<tr>
    			<td>※市区町村番地</td><td><div class="result"><?= $address ?></div></td>
    		</tr>
    		<tr>
    			<td>マンション名</td><td><div class="result"><?= $mansion ?></div></td>
    		</tr>
    	</table>
    </div>

    <div class="formArea">
    <h2>クレジットカード情報</h2>
    	<table>
    		<tr>
    			<td class="itemName">カード会社</td>
    			<td class="cardInfo">
                	<div class="result"><?= $company ?></div>
                </td>
    		</tr>
    		<tr>
    			<td class="itemName">カード名義</td>
                <td class="cardInfo">
                	<div class="result"><?= $cardName ?></div>
                </td>
    		</tr>
    		<tr>
    			<td class="itemName">カード番号</td>
                <td class="cardInfo">
                	<div class="result"><?= $cardNum ?></div>
                </td>
    		</tr>
    		<tr>
    			<td class="itemName">有効期限</td>
                <td class="cardInfo">
                	<div class="result"><?= $limitMonth ?></div>月
    				<div class="result"><?= $limitYear ?></div>年
               	</td>
    		</tr>
    	</table>
    </div>

    <div id="conf">
		<form action="registrationComplete.php" method="post">
			<input type="hidden" name="userName" value="<?= $lastName.$firstName ?>">
			<input type="hidden" name="userRuby" value="<?= $kanaLastName.$kanaFirstName ?>">
			<input type="hidden" name="userSex" value="<?= $sex ?>">
			<input type="hidden" name="userBirthDate" value="<?= $birthYear.$birthMonth.$birthDay ?>">
			<input type="hidden" name="userID" value="<?= $id ?>">
			<input type="hidden" name="userPass" value="<?= $pass ?>">
			<input type="hidden" name="userPhoneNum" value="<?= $phoneNum ?>">
			<input type="hidden" name="userMailAddress" value="<?= $mailAddress ?>">
			<input type="hidden" name="userPost" value="<?= $post ?>">
			<input type="hidden" name="userAddress" value="<?= $state.$address.$mansion ?>">
			<input type="hidden" name="cardCompany" value="<?= $company ?>">
			<input type="hidden" name="cardName" value="<?= $cardName ?>">
			<input type="hidden" name="cardNum" value="<?= $cardNum ?>">
			<input type="hidden" name="cardLimit" value="<?= $limitYear.$limitMonth.$limitDay ?>">
	    	<button>この内容で登録する</button>
		</form>
    </div>

</main>


<?php
    include 'foot.php';
?>