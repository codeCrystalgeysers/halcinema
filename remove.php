<?php
	$hostName = "localhost";
	$dbmsUser = "root";
	$dbmsPass = ""; 
	$con = mysql_connect($hostName,$dbmsUser,$dbmsPass);
	mysql_set_charset('utf8');
	mysql_select_db("halcinema",$con);
	$sql = "SELECT * FROM reserve";
	$res = mysql_query($sql,$con);
	echo date("H:i:s");
	mysql_close($con);
?>