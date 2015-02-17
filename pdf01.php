<?php
	$con = mysql_connect("localhost","root","");
	mysql_set_charset("utf8");
	mysql_select_db("halcinema",$con);
	$sql = "SELECT count(*) AS kensu,title FROM reserve AS a JOIN movie AS b ON a.movie_id = b.movie_id WHERE ok = 'ok' GROUP BY DATE_FORMAT(a.reserved_time, '%Y%m'),b.movie_id ORDER BY count(*) DESC";
	$res = mysql_query($sql,$con);
	while($row = mysql_fetch_array($res)){
		//echo $row["kensu"].":".$row["title"]."<br>";
	}
	mysql_close($con);
	require('fpdf/mdfpdf.php');
	$pdf = new MdfPDF();
	$pdf -> addpage();
	$pdf -> addMdFont(GOTHIC,'SJIS');
	$pdf -> setFont(GOTHIC,'',10);
	$pdf -> write(10,'月別映画予約状況');
	$pdf -> putput();
?>