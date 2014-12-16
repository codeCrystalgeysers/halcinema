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
include 'getMovieDB.php';
?>

<div id="slider">
    <div id="reserveTimetable">
      <ul id="reserveTimetableDate" class="left">
        <?php
          while ($time = mysql_fetch_array($res2)){
            $a = substr($time['date'],5,strlen($time['date'])-5);
            echo "<li data-date='".str_replace("-", "/", $a)."'>".str_replace("-", "/", $a)."</li>";
          }
        ?>
      </ul>
      <ul id="reserveTimetableTime" class="left">
        <?php
        mysql_data_seek($res2, 0);
          while ($time = mysql_fetch_array($res2)){
            $a = substr($time['start_time'],0,strlen($time['start_time'])-3);
            $c = split(":",$a);
            mysql_data_seek($res, 0);
            while($movie = mysql_fetch_array($res)){
              if($movie['movie_id'] == $time['movie_id']){
                $H = sprintf("%2d",$movie['time']/60);
                $H = ($c[0]+$H);
                $i = $movie['time']%60;
                $i = ($c[1]+$i);
                if($i == 60){
                  $H = $H + 1;
                  $i = sprintf("%02d",0);
                }
                $b = $H.":".$i;
              }
            }
            echo "<li data-time='".$a."-".$b."'>".$a."-".$b."</li>";
          }
        ?>
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
      <?php 
          mysql_data_seek($res, 0);
          while($movie = mysql_fetch_array($res)){
            echo("<li>
                    <figure>
                      <img src='img/thumbnail/".$movie['image']."' class='moviesPic' data-id='".$movie['movie_id']."' data-title='".$movie['title']."'>
                      <figcaption class='moviesCap'>
                          <span class='moviesTitle'>".$movie['title']."</span>
                          <!-- <span class='moviesCategory'>(カテゴリ表示の仕方は検討中)</span> -->
                      </figcaption>
                    </figure>
                  </li>");
          }
      ?>
	    </ul>
	</div>
  <div id="wakana">

  </div>
</div>
<div id="reserveArea">
    <div id="seats">
      <div id="seatLoading">
        
      </div>
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
