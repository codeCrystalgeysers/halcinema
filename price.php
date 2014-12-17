<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/price.css">
<title>HAL Cinema</title>
<?php
    include 'head.php';
?>

<div id="contentsWrap">
    <main>
    <div id="prc">
        <div class="ttt">チケット</div>
        <div id="tbl1">
            <div class="tic1">
                <div class="ttl">【チケット料金】</div>
                <div class="tic_price">一般　1800円</div>
                <div class="tic_price">子ども(高校生以下)　1000円</div>
                <div class="tic_price">ペアシート　4000円</div>
                <div class="tic_price"></div>
            </div>

            <div class="tic2">
                <div class="ttl">【特別割引】</div>
                <div class="tic_price">ファーストデー</div>
                <div class="tic_price">メンズデー</div>
                <div class="tic_price">レディスデー</div>
                <div class="tic_price">カップルデー</div>
                <div class="tic_price">映画の日</div>
                <div class="tic_price">会員割引</div>
                <div class="tic_price">夫婦50割</div>
                <div class="tic_price">レイトショー</div>
                <div class="tic_price"></div>
            </div>

              <div class="tic3">
                <div class="ttl">【3D料金】</div>
                <div class="tic_price1">映画鑑賞料金＋300円で鑑賞出来ます。</div>
                <div class="tic_price"></div>
            </div>
        </div><!--tbl1-->

        <div class="ttt">ドリンク＆フード</div>
        <div id="tbl2">
            <div class="dri_foo_tl">【カフェメニュー】</div>
            <div class="dri01">
                <div class="drink">ペプシ</div>
                <div class="drink">ペプシネックス</div>
                <div class="drink">ジンジャーエール</div>
                <div class="drink">ホワイトウォーター</div>
            </div>
            <div class="dri01">
                <div class="drink1">なっちゃんオレンジ</div>
                <div class="drink1">メロンソーダ</div>
                <div class="drink1">アイスティー</div>
                <div class="drink1">ウーロン茶</div>
            </div>
            <div class="dri01">
                <div class="drink_price">Sサイズ：200円<br />Mサイズ：300円</div>
            </div>

            <div class="dri02">
                <div class="drink2">
                    <div class="nama">生ビール</div>
                    <div class="drink_price1">500円</div>
                </div>
                <div class="drink2">
                </div>
                
            </div>

            <div class="dri_foo_tl">【フード】</div>
            <div class="ttlfood">
                <div class="food">ポップコーン　塩</div>
                <div class="food_price">Mサイズ：250円/Lサイズ：400円</div>

                <div class="food">ポップコーン　キャラメル</div>
                <div class="food_price">Mサイズ：350円/Lサイズ：600円</div>

                <div class="food">ポップコーン　塩・キャラメル</div>
                <div class="food_price">ハーフ：550円</div>

                <div class="drink2">
                </div>
            </div>

            <div class="dri_foo_tl">【セット】</div>
            <div class="ttlfood">

                <div class="food">ポップコーン　塩　ペア(ポップコーンL×1+ドリンク×2)</div>
                <div class="food_price">900円</div>

                <div class="food">ポップコーン　塩　ドリンクMセット</div>
                <div class="food_price">500円</div>

                <div class="food">ポップコーン　塩　ビールセット</div>
                <div class="food_price">760円</div>

                <div class="food">ポップコーン　キャラメル　ペア(ポップコーンL×1+ドリンク×2)</div>
                <div class="food_price">1100円</div>

                <div class="food">ポップコーン　キャラメル　ドリンクMセット</div>
                <div class="food_price">600円</div>

                <div class="food">ポップコーン　キャラメル　ビールセット</div>
                <div class="food_price">860円</div>

                <div class="food">ポップコーン　ハーフ　ペア(ポップコーンL×1+ドリンク×2)</div>
                <div class="food_price">1050円</div>

                <div class="drink2">
                </div>

            </div>
        </div>
            <div class="txttxt">
                <p>
                    <span>注意事項</span>
                    ※割引の併用はできません<br>
                    ※２３時以降に終了する作品は、１８歳未満の方はご入場できません。
                </p>
            </div>
    </div><!--prc-->
    </main>

    <div id="divide">
        <aside id="subContent">
        <?php
            include 'aside.php';
        ?>
        </aside>
        <div id="links"><!-- 広告 --></div>
    </div>
</div>

<?php
    include 'foot.php';
?>
