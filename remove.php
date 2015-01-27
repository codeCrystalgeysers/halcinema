<?php
	$hostName = "localhost";
	$dbmsUser = "root";
	$dbmsPass = ""; 
	$con = mysql_connect($hostName,$dbmsUser,$dbmsPass);
	mysql_set_charset('utf8');
	mysql_select_db("halcinema",$con);
	$nowTime = date("Y-m-d H:i:s",mktime(date("H"),date("i")-10,date("s"),date("m"),date("d"),date("Y")));
	$remove = "DELETE FROM reserve WHERE reserved_time < '$nowTime' AND ok = 'no'";
	$removeres = mysql_query($remove,$con);
	mysql_close($con);
?>