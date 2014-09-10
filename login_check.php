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
	$sql = "SELECT COUNT(*) FROM user WHERE user_id='$id' AND password='$pass'";
	$res = mysql_query($sql,$con);
	
	//DB切断
	mysql_close($con);

	//ログイン処理
	$flag = 0;
	while($row = mysql_fetch_array($res)){
		$count = $row[0];
		if($count == 1){
			$flag = 1;
			break;
		}
	}
	
	if($flag == 1){
		header("location:index.php");
		exit;
	}else{
		header("location:login.php");
		exit;
	}