<?php
	$movieId = $_POST["movieSelect"];
	require('fpdf/mbfpdf.php');
	$pdf = new MbfPDF();
	$pdf -> addpage();
	$pdf -> addMbFont(GOTHIC,'SJIS');
	$pdf -> setFont(GOTHIC,'',10);
	$pdf -> write(10,'ŒŽ•Ê‰f‰æ—\–ñó‹µ');
	$con = mysql_connect("localhost","root","");
	mysql_set_charset("utf8");
	mysql_select_db("halcinema",$con);
	$sql = "SELECT count(*) AS kensu FROM reserve AS a JOIN user AS b ON a.user_id = b.user_id WHERE ok = 'ok' GROUP BY DATE_FORMAT(b.birth_date, '%Y%'),b.sex";
	$res = mysql_query($sql,$con);
	while($row = mysql_fetch_array($res)){
		$a = mb_convert_encoding($row["kensu"],"SJIS","UTF-8");
				$y = $pdf -> getY();
				$pdf -> setXY(10,$y+10);
				$pdf -> write(10,$a);
	}
	mysql_close($con);
	$pdf -> output();
?>