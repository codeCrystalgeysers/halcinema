<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="js/jq2min.js"></script>
</head>
<body>
	<form action="pdf02.php" method="POST">
		<select name="movieSelect">
			<?php
				$con = mysql_connect("localhost","root","");
				mysql_set_charset("utf8");
				mysql_select_db("halcinema",$con);
				$sql = "SELECT movie_id,title FROM movie";
				$res = mysql_query($sql,$con);
				while($row = mysql_fetch_array($res)){
					echo "<option value='".$row["movie_id"]."'>".$row["title"]."</option>";
				}
				mysql_close($con);
			?>
			<input type="submit" value="PDF">
		</select>
	</form>
</body>
</html>