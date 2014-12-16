<?php
header('Content-type: text/html; charset=UTF-8');
header('Content-Transfer-Encoding: binary');
$hostName = "localhost";
  $dbmsUser = "root";
  $dbmsPass = ""; 
  $con = mysql_connect($hostName,$dbmsUser,$dbmsPass);
  mysql_set_charset('utf8');
  mysql_select_db("halcinema",$con);
  $date = date("Y-m-d");
  $date3 = date("Y-m-d",mktime(0,0,0,date("m"),date("d")+3,date("Y")));
  $sql = "SELECT * FROM movie WHERE opening_day <= '$date3' AND end_day >= '$date'";
  //タイムスケジュール
  $sql2 = "SELECT * FROM screening_time WHERE date <= '$date3' ORDER BY date asc ";
  $res = mysql_query($sql,$con);
  $res2 = mysql_query($sql2,$con);
  $timetable = $res2;
  mysql_close($con);
?>