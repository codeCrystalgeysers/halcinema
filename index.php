<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<script src="js/jq2min.js"></script>
<script src="js/topSlider.js"></script>
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<title>HAL Cinema</title>

<?php
include 'head.php';
?>

<div id="slider">
    <div id="rankTop">A</div>
    <div class="slideFrame" id="slide-00">
		<ul class="slideGuide">
			<li class="slideCell">セル</li>
			<li class="slideCell">セル</li>
			<li class="slideCell">セル</li>
			<li class="slideCell">セル</li>
			<li class="slideCell">セル</li>
			<li class="slideCell">セル</li>
			<li class="slideCell">セル</li>
		</ul>
		<div class="slideCtrl left">&lt;</div>
		<div class="slideCtrl right">&gt;</div>
	</div>
	<div id="cinemaToggle">Switch</div>
	<div id="cinemaList">リストアップあとで</div>
</div>
<div id="reserveArea">
    人物アイコンやらここに(draggable?)
    <div id="sheet">
        席が選べるやつな　キャパシティ越えるやつな
    </div>
    <div id="details">
        <dl>
            <dt>選択映画タイトルでる</dt>
            <dd><img src="nowImg" id="nowImg"></dd>
            <dd id="nowDetail">映画詳細情報</dd>
            <dt id="">料金うちわけのところ</dt>
            <dd>
                <span id="ticketTypeAd">大人</span>×1枚
                <span id="ticketTypeSt">学生</span>×2枚
                <span id="ticketTypeCh">小人</span>×3枚
                <span id="ticketTypeSe">シニア</span>×4枚
            </dd>
            <dd id="totalPrice">料金合計出る</dd>
        </dl>
        <form method="post"><!-- action書いてないです，submitが一緒のform内にあります -->
            <input type="submit" name="alertOn" value="アラート">
            <input type="submit" name="reserveOn" value="予約">
        </form>
    </div>
</div>



<script>
    $("#slide-00").slider();
</script>

<?php
include 'foot.php';
?>