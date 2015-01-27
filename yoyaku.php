<?php
session_start();
	$movieId = $_GET['movieId'];
  $timeId = $_GET['timeId'];
  $seatId = $_GET['seatId'];
  $cate = $_GET['cate'];
  $user = $_SESSION["id"];
  header('Content-type: text/html; charset=UTF-8');
  header('Content-Transfer-Encoding: binary');
  $hostName = "localhost";
  $dbmsUser = "root";
  $dbmsPass = "";
  $con = mysql_connect($hostName,$dbmsUser,$dbmsPass);
  mysql_set_charset('utf8');
  mysql_select_db("halcinema",$con);
  $date = date("Y-m-d H:i:s");
  $sql = "SELECT MAX(reserve_id) FROM reserve";
  $res = mysql_query($sql,$con);
  while($time = mysql_fetch_array($res)){
    $id = $time[0]+1;
  }
  $timesql = "SELECT MAX(reserve_id) FROM reserve";
  $sql2 = "INSERT INTO reserve(reserve_id,movie_id,seat_id,user_id,ticket_type,reserved_time,ok,time_id) VALUES ('$id','$movieId','$seatId','$user','$cate','$date','ok','$timeId')";
  $res2 = mysql_query($sql2,$con);
  mysql_close($con);
  echo "$movieId<br>$timeId<br>$seatId<br>$cate<br>$user<br>$date<br>$id<br>";
	?>