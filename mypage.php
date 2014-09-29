<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/mypage.css">
<title>HAL Cinema</title>
<?php
    include 'head.php';
?>

<main>

    <div id="leftColumn">

    	<div class="title">座席予約中作品</div>

    	<table border="1" class="reservation">
    		<tr>
    			<td>作品名</td><td>上映日時</td><td>SCREEN</td><td>支払い方法</td><td>予約日</td>
    		</tr>
    		<tr>
    			<td>ゴジラ</td><td>9/3(水)</td><td>SCREEN⑤</td><td>クレジットカード</td><td>8/31（日）</td>
    		</tr>
    	</table>

    	<table border="1" class="reservation">
    		<tr>
    			<td>作品名</td><td>上映日時</td><td>SCREEN</td><td>支払い方法</td><td>予約日</td>
    		</tr>
    		<tr>
    			<td>ゴジラ</td><td>9/4(木)</td><td>SCREEN⑤</td><td>クレジットカード</td><td>8/31（日）</td>
    		</tr>
    	</table>

    	<table border="1" class="reservation">
    		<tr>
    			<td>作品名</td><td>上映日時</td><td>SCREEN</td><td>支払い方法</td><td>予約日</td>
    		</tr>
    		<tr>
    			<td>ゴジラ</td><td>9/5(金)</td><td>SCREEN⑤</td><td>クレジットカード</td><td>8/31（日）</td>
    		</tr>
    	</table>

	    <br />
	    ・<br />
	    ・<br />
	    ・<br />

    	<div class="title">購入履歴</div>

    	<table border="1" class="reservation">
    		<tr>
    			<td>作品名</td><td>上映日時</td><td>SCREEN</td><td>支払い方法</td><td>予約日</td>
    		</tr>
    		<tr>
    			<td>ゴジラ</td><td>9/2(火)</td><td>SCREEN⑤</td><td>クレジットカード</td><td>8/31（日）</td>
    		</tr>
    	</table>

	</div><!--leftColumn-->

	<div id="rightColumn">

		<div class="button">
			チケット予約
		</div>

		<div class="button">
			スマートフォンでの予約はこちら
		</div>

		<table id="movieElection">
			<tr>
				<td>○/○　映画総選挙途中経過</td>
			<tr>
			<tr>
				<td>1位　○○○○○○○</td>
			<tr>
			<tr>
				<td>2位　○○○○○○○</td>
			<tr>
			<tr>
				<td>3位　○○○○○○○</td>
			<tr>
		</table>

		<div id="bana">
			広告・バナー
		</div>

	</div><!--rightColumn-->

</main>

<div id="divide">
    <aside id="subContent">
    <?php
        include 'aside.php';
    ?>
    </aside>
    <div id="links"><!-- 広告 --></div>
</div>
<?php
    include 'foot.php';
?>