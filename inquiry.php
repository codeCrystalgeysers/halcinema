<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/inquiry.css">
<title>HAL Cinema</title>
<?php
    include 'head.php';
?>

<main>

    <div id="leftColumn">

    <div id="title">お問い合わせ</div>

	    <div id="desc">
	    	お問い合わせありがとうございます。<br />
			ここでは各劇場についてのご質問を承っております。<br />
			このホームページに掲載されている内容よりもさらに詳しく知りたいこと、またはご質問等ございましたら下記までお問い合わせください。<br />
			土日祝日・深夜にメールを頂戴した場合、回答にお時間をいただく場合がございます。ご了承願います。<br />
	    </div>

	    <div id="tel">
	    	<h3>劇場に関するお問い合わせ</h3>
	    	<p>HALシネマ東京　03-1111-1111　<a href="#">mail@mail.cinema.com</a>
	    	<p>HALシネマ大阪　03-1111-1111　<a href="#">mail@mail.cinema.com</a>
	    	<p>HALシネマ名古屋　03-1111-1111　<a href="#">mail@mail.cinema.com</a>
	    </div>

	    <div id="mailForm">
	    	<h3>メールフォーム</h3>
	    	<p>name: <input type="text" name="mailname" /></p>
	    	<br />
	    	<p>mailaddress: <input type="text" name="mailaddress" /></p>
	    	<br />
	    	<textarea cols="65" rows="10"></textarea>
	    	<br />
	    	<br />
	    	お問い合わせの内容が該当するものにチェックしてください。<br />
	    	チェックなしでも送信できます。
	    	<br />
	    	<br />
	    	<input type="checkbox" name="tokyo" value="東京">東京
	    	<input type="checkbox" name="osaka" value="大阪">大阪
	    	<input type="checkbox" name="nagoya" value="東京">名古屋
	    	<input type="checkbox" name="other" value="サイトに関して">サイトに関して
	    	<br />
	    	<br />
	    	<input type="button" name="send" value="送信" />
	    </div>

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