<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<script src="js/jq2min.js"></script>
<script src="js/common.js"></script>
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
            <li>
                <figure>
                    <img src="img/sample.jpg" class="movies" data-id="xxxxx" data-title="eigaTitle" data-date-start="sTime" data-date-end="eTime">
                    <figcaption>
                        <h3>Settings</h3>
                        <span>Jacob Cummings</span>
                        cc
                    </figcaption>
                </figure>
            </li>
        </ul>
    </div>
	<div id="cinemaToggle">Switch</div>
	<div id="cinemaList">
	    <ul>
	        <li><img src="img/sample.jpg"  data-id="xxxxx" data-title="eigaTitle" data-date-start="sTime" data-date-end="eTime"></li>
	    </ul>
	</div>
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
        live
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
        animationSpeed: 1200,
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