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
    <div class="flexslider">
        <ul class="slides">
            <li>セルs <img src="" alt=""></li>
            <li>セル2</li>
            <li>セル3</li>
            <li>セル4</li>
            <li>セル5</li>
            <li>セル6</li>
            <li>セル7</li>
            <li>セルe</li>
        </ul>
    </div>
	<div id="cinemaToggle">Switch</div>
	<div id="cinemaList">リストアップあとで</div>
</div>
<div id="reserveArea">
    <div id="timeLine">
        <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
        </ul>
    </div>
    <div id="sheet">
        人物アイコンやらここに(draggable?)<br>
        席が選べるやつな　キャパシティ越えるやつな
    </div>
    <div id="details">
        <dl id="nowSelect">
            <dt id="nowTitle">選択映画タイトルでる</dt>
            <dd id="nowDate">せんたくした日付出力</dd>
            <dd id="nowSheet">選択座席だす</dd>
            <dd id="nowSheet">
                <span id="ticketTypeAd">大人</span>×1枚
                <span id="ticketTypeSt">学生</span>×2枚
                <span id="ticketTypeCh">小人</span>×3枚
                <span id="ticketTypeSe">シニア</span>×4枚<!-- パターン一覧 -->
            </dd>
        </dl>
        <div id="nowPrice">
            <span id="totalPrice">合計額</span>
            <form method="post"><!-- action書いてないです，submitが一緒のform内にあります -->
            <input type="submit" name="alertOn" value="アラート">
            <input type="submit" name="reserveOn" value="予約">
        </form>
        </div>
    </div>
</div>

<script>
    $(window).load(function() {
      $('.flexslider').flexslider({
        pauseOnHover: true,
        slideshowSpeed: 4000,
        animationSpeed: 2000,
        animation: 'slide',
        itemWidth: 210,
        minItems: 3,
        maxItems: 3
      });
    });
</script>
<?php
include 'foot.php';
?>