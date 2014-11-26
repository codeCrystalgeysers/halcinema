<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<script src="js/jq2min.js"></script>
<script src="js/index.js"></script>
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<title>HAL Cinema</title>
<?php
include 'head.php';
?>

<div id="slider">
    <div id="reserveTimetable">
      <ul id="reserveTimetableDate" class="left">
        <li>10/12</li>
        <li>10/13</li>
        <li>10/14</li>
        <li>10/15</li>
      </ul>
      <ul id="reserveTimetableTime" class="left">
        <li>12:00 ~ 14:00</li>
        <li>14:30 ~ 16:30</li>
        <li>17:00 ~ 19:00</li>
        <li>19:30 ~ 21:30</li>
      </ul>
    </div>
    <div id="movies">
      <ul id="moviesTop3" class="moviesList">
        <li>
          <figure>
            <img src="img/miura1.jpg" class="moviesPic" data-id="xxxxx1" data-title="moviesTitle1">
            <figcaption class="moviesCap">
                <span class="moviesTitle">映画タイトル</span>
                <!-- <span class="moviesCategory">(カテゴリ表示の仕方は検討中)</span> -->
            </figcaption>
          </figure>
        </li>
        <li>
          <figure>
            <img src="img/miura2.jpg" class="moviesPic" data-id="xxxxx2" data-title="moviesTitle2">
            <figcaption class="moviesCap">
                <span class="moviesTitle">映画タイトル</span>
                <!-- <span class="moviesCategory">(カテゴリ表示の仕方は検討中)</span> -->
            </figcaption>
          </figure>
        </li>
        <li>
          <figure>
            <img src="img/take.jpg" class="moviesPic" data-id="xxxxx3" data-title="moviesTitle3">
            <figcaption class="moviesCap">
              <span class="moviesTitle">映画タイトル</span>
              <!-- <span class="moviesCategory">(カテゴリ表示の仕方は検討中)</span> -->
            </figcaption>
          </figure>
        </li>
      </ul>
    </div>
	<div id="moviesToggle">その他の上映中映画 ▼</div>
	<div id="moviesSub" class="moviesList">
	    <ul>
        <li>
          <figure>
              <img src="img/take.jpg" class="moviesPic" data-id="xxxxx01" data-title="moviesTitle01">
              <figcaption class="moviesCap">
                <span class="moviesTitle">映画タイトル</span>
                <!-- <span class="moviesCategory">(カテゴリ表示の仕方は検討中)</span> -->
              </figcaption>
          </figure>
        </li>
        <li>
          <figure>
            <img src="img/take.jpg" class="moviesPic" data-id="xxxxx02" data-title="moviesTitle02">
            <figcaption class="moviesCap">
              <span class="moviesTitle">映画タイトル</span>
              <!-- <span class="moviesCategory">(カテゴリ表示の仕方は検討中)</span> -->
            </figcaption>
          </figure>
        </li>
        <li>
          <figure>
            <img src="img/take.jpg" class="moviesPic" data-id="xxxxx03" data-title="moviesTitle03">
            <figcaption class="moviesCap">
              <span class="moviesTitle">映画タイトル</span>
              <!-- <span class="moviesCategory">(カテゴリ表示の仕方は検討中)</span> -->
            </figcaption>
          </figure>
        </li>
        <li>
          <figure>
            <img src="img/take.jpg" class="moviesPic" data-id="xxxxx03" data-title="moviesTitle03">
            <figcaption class="moviesCap">
              <span class="moviesTitle">映画タイトル</span>
              <!-- <span class="moviesCategory">(カテゴリ表示の仕方は検討中)</span> -->
            </figcaption>
          </figure>
        </li>
        <li>
          <figure>
            <img src="img/take.jpg" class="moviesPic" data-id="xxxxx03" data-title="moviesTitle03">
            <figcaption class="moviesCap">
              <span class="moviesTitle">映画タイトル</span>
              <!-- <span class="moviesCategory">(カテゴリ表示の仕方は検討中)</span> -->
            </figcaption>
          </figure>
        </li>
        <li>
          <figure>
            <img src="img/take.jpg" class="moviesPic" data-id="xxxxx03" data-title="moviesTitle03">
            <figcaption class="moviesCap">
              <span class="moviesTitle">映画タイトル</span>
              <!-- <span class="moviesCategory">(カテゴリ表示の仕方は検討中)</span> -->
            </figcaption>
          </figure>
        </li>
        <li>
          <figure>
            <img src="img/take.jpg" class="moviesPic" data-id="xxxxx03" data-title="moviesTitle03">
            <figcaption class="moviesCap">
              <span class="moviesTitle">映画タイトル</span>
              <!-- <span class="moviesCategory">(カテゴリ表示の仕方は検討中)</span> -->
            </figcaption>
          </figure>
        </li>
        <li>
          <figure>
            <img src="img/take.jpg" class="moviesPic" data-id="xxxxx03" data-title="moviesTitle03">
            <figcaption class="moviesCap">
              <span class="moviesTitle">映画タイトル</span>
              <!-- <span class="moviesCategory">(カテゴリ表示の仕方は検討中)</span> -->
            </figcaption>
          </figure>
        </li>
	    </ul>
	</div>
</div>
<div id="reserveArea">
    <div id="seats">
      <div id="seatLoading"></div>
      <div id="seatsBackground"></div>
    </div>

    <div id="reserveBreakdown">
      <div id="reserveDetails">
        <dl id="reserveNowSelect">
          <dt id="reserveNowTitle">Erat lorem ipsum veroeros consequat</dt>
          <dd id="reserveNowDate">10/14 12:00 ~ 14:00</dd>
          <dd id="reserveNowSeatID">選択座席だす</dd>
          <!-- <dd id="reserveNowTickets">
            <span id="ticketTypeAd">大人</span>×1枚
            <span id="ticketTypeSt">学生</span>×2枚
            <span id="ticketTypeCh">小人</span>×3枚
            <span id="ticketTypeSe">シニア</span>×4枚パターン一覧
          </dd> -->
        </dl>
        <div id="reserveNowPrice">
          <span id="totalPrice">合計額</span>
          <span id="totalPriceYen">2400</span>
          <form method="post"><!-- action書いてないです，submitが一緒のform内にあります -->
            <input type="submit" name="alertOn" value="アラート">
            <input type="submit" name="reserveOn" value="予約">
          </form>
        </div>
      </div>
    </div>
</div>

<?php
include 'foot.php';
?>
