<?php
	//id,passの取得
	$id = $_POST["id"];
	$pass = $_POST["pass"];
	
	//DB接続
	$hostName = "localhost";
	$dbmsUser = "root";
	$dbmsPass = "";	
	$con = mysql_connect($hostName,$dbmsUser,$dbmsPass);
	mysql_select_db("halcinema",$con);
	
	//SQL実行
	//認証処理
	$sql = "SELECT COUNT(*) FROM user WHERE user_id='$id' AND password='$pass'";
	$address = "SELECT mail_address FROM user WHERE user_id='$id'";
	$text = "SELECT template_text FROM template WHERE tenplate_id IN('A','D','B')";
	$res = mysql_query($sql,$con);
	$address = mysql_query($address,$con);
	$text = mysql_query($text,$con);
	
	//DB切断
	mysql_close($con);

	//ログイン処理
	$success = FALSE;
	while($row = mysql_fetch_array($res)){
		$count = $row[0];
		if($count == 1){
			$success = TRUE;
			break;
		}
	}
	//success: TRUEが成功　FALSEが失敗
	if($success == TRUE){
		//session
		session_start();
		$_SESSION["id"] = $id;
		
		mb_language("ja");
		mb_internal_encoding("UTF-8");
		if(mb_send_mail("$address", "HALCinemaからのお知らせ", "$text", "From: info@halcinema.com")){
			header("location:index.php");
			exit;
		}else{

		}
		
	}else{
		header("location:login.php?message=error");
		exit;
	}