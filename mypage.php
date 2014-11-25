<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/mypagecommon.css">
<link rel="stylesheet" type="text/css" href="css/mypage.css">

<title>HAL Cinema</title>
<?php
    include 'head.php';
?>

<div id="contentsWrap">
    <div id="left">
        <aside id="localMenu">
            <?php
                include 'mypageaside.php';
            ?>
        </aside>
        <div id="links">
            <div class="button">
                チケット予約
            </div>

            <div class="button">
                スマートフォンでの予約はこちら
            </div>

            <table id="movieElection">
                <tr>
                    <td>○/○　映画総選挙途中経過</td>
                </tr>
                <tr>
                    <td>1位　○○○○○○○</td>
                </tr>
                <tr>
                    <td>2位　○○○○○○○</td>
                </tr>
                <tr>
                    <td>3位　○○○○○○○</td>
                </tr>
            </table>

            <div id="bana">
                広告・バナー
            </div>
        </div>
    </div>

    <main id="right">
        <div class="title">座席予約中作品</div>

        <table class="reservation">
            <tr>
                <th>作品名</th><th>上映日時</th><th>SCREEN</th><th>支払い方法</th><th>予約日</th>
            </tr>
            <tr>
                <td>ゴジラ</td><td>9/3(水)</td><td>SCREEN⑤</td><td>クレジットカード</td><td>8/31（日）</td>
            </tr>
            <tr>
                <td>ゴジラ</td><td>9/4(木)</td><td>SCREEN⑤</td><td>クレジットカード</td><td>8/31（日）</td>
            </tr>
            <tr>
                <td>ゴジラ</td><td>9/5(金)</td><td>SCREEN⑤</td><td>クレジットカード</td><td>8/31（日）</td>
            </tr>
        </table>

        <div class="title">購入履歴</div>

        <table class="reservation">
            <tr>
                <th>作品名</th><th>上映日時</th><th>SCREEN</th><th>支払い方法</th><th>予約日</th>
            </tr>
            <tr>
                <td>ゴジラ</td><td>9/2(火)</td><td>SCREEN⑤</td><td>クレジットカード</td><td>8/31（日）</td>
            </tr>
        </table>
    </main>
</div>

<?php
    include 'foot.php';
?>