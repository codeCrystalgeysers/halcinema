<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<script src="js/jq2min.js"></script>
<script src="js/common.js"></script>
<script src="js/index.js"></script>
<script src="js/topSlider.js"></script>
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<title>HAL Cinema</title>

<?php
include 'head.php';
?>


<div id="slider">
    <div id="rankTop"><img src="img/sample.jpg" alt=""></div>
    <div class="flexslider">
        <ul class="slides">
            <li>
                <figure>
                    <img src="img/miura1.jpg" class="moviesPic" data-id="xxxxx" data-title="moviesTitle1" data-date-start="sTime1" data-date-end="eTime1">
                    <figcaption class="moviesCap">
                        <span class="moviesTitle">映画タイトル</span>
                        <span class="moviesCategory">(カテゴリ表示の仕方は検討中)</span>
                    </figcaption>
                </figure>
            </li>
            <li>
                <figure>
                    <img src="img/miura2.jpg" class="moviesPic" data-id="xxxxx" data-title="moviesTitle2" data-date-start="sTime2" data-date-end="eTime2">
                    <figcaption class="moviesCap">
                        <span class="moviesTitle">映画タイトル</span>
                        <span class="moviesCategory">(カテゴリ表示の仕方は検討中)</span>
                    </figcaption>
                </figure>
            </li>
            <li>
                <figure>
                    <img src="img/take.jpg" class="moviesPic" data-id="xxxxx" data-title="moviesTitle3" data-date-start="sTime3" data-date-end="eTime3">
                    <figcaption class="moviesCap">
                        <span class="moviesTitle">映画タイトル</span>
                        <span class="moviesCategory">(カテゴリ表示の仕方は検討中)</span>
                    </figcaption>
                </figure>
            </li>
            <li>
                <figure>
                    <img src="img/3pri.png" class="moviesPic" data-id="xxxxx" data-title="moviesTitle4" data-date-start="sTime4" data-date-end="eTime4">
                    <figcaption class="moviesCap">
                        <span class="moviesTitle">映画タイトル</span>
                        <span class="moviesCategory">(カテゴリ表示の仕方は検討中)</span>
                    </figcaption>
                </figure>
            </li>
        </ul>
    </div>
	<div id="cinemaToggle">Switch</div>
	<div id="cinemaList">
	    <ul>
	        <li><img src="img/sample.jpg"  data-id="xxxxx" data-title="eigaTitle" data-date-start="sTime" data-date-end="eTime"></li>
	        <li><img src="img/sample.jpg"  data-id="xxxxx" data-title="eigaTitle" data-date-start="sTime" data-date-end="eTime"></li>
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