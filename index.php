<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<script src="js/jq2min.js"></script>
<script src="js/common.js"></script>
<script src="js/index.js"></script>
<script src="js/topSlider.js"></script>
<script src="js/createSheet.js"></script>
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
                    <img src="img/miura1.jpg" class="moviesPic" data-id="xxxxx1" data-title="moviesTitle1">
                    <figcaption class="moviesCap">
                        <span class="moviesTitle">映画タイトル</span>
                        <span class="moviesCategory">(カテゴリ表示の仕方は検討中)</span>
                    </figcaption>
                </figure>
            </li>
            <li>
                <figure>
                    <img src="img/miura2.jpg" class="moviesPic" data-id="xxxxx2" data-title="moviesTitle2">
                    <figcaption class="moviesCap">
                        <span class="moviesTitle">映画タイトル</span>
                        <span class="moviesCategory">(カテゴリ表示の仕方は検討中)</span>
                    </figcaption>
                </figure>
            </li>
            <li>
                <figure>
                    <img src="img/take.jpg" class="moviesPic" data-id="xxxxx3" data-title="moviesTitle3">
                    <figcaption class="moviesCap">
                        <span class="moviesTitle">映画タイトル</span>
                        <span class="moviesCategory">(カテゴリ表示の仕方は検討中)</span>
                    </figcaption>
                </figure>
            </li>
            <li>
                <figure>
                    <img src="img/3pri.png" class="moviesPic" data-id="xxxxx4" data-title="moviesTitle4">
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
	        <li>
                <figure>
                    <img src="img/take.jpg" class="moviesPic" data-id="xxxxx01" data-title="moviesTitle01">
                    <figcaption class="moviesCap">
                        <span class="moviesTitle">映画タイトル</span>
                        <span class="moviesCategory">(カテゴリ表示の仕方は検討中)</span>
                    </figcaption>
                </figure>
            </li>
	        <li>
                <figure>
                    <img src="img/take.jpg" class="moviesPic" data-id="xxxxx02" data-title="moviesTitle02">
                    <figcaption class="moviesCap">
                        <span class="moviesTitle">映画タイトル</span>
                        <span class="moviesCategory">(カテゴリ表示の仕方は検討中)</span>
                    </figcaption>
                </figure>
            </li>
	        <li>
                <figure>
                    <img src="img/take.jpg" class="moviesPic" data-id="xxxxx03" data-title="moviesTitle03">
                    <figcaption class="moviesCap">
                        <span class="moviesTitle">映画タイトル</span>
                        <span class="moviesCategory">(カテゴリ表示の仕方は検討中)</span>
                    </figcaption>
                </figure>
            </li>
	    </ul>
	</div>
</div>
<div id="reserveArea">
    <div id="timeLine">
    </div>
    <div class="sheet" id="sheet1">

    </div>
    <div class="sheet" id="sheet2">

    </div>
    <div class="sheet" id="sheet3">

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
