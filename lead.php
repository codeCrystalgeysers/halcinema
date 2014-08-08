<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<script src="js/jq2min.js"></script>
<script src="js/topSlider.js"></script>
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/lead.css">
<title>HAL Cinema</title>

<?php
    include 'head.php';
?>

<div id="lefttColumn">
    <h3>劇場案内</h3>

    <table border="1" id="tbl">
        
        <tr>
            <th>スクリーン</th><th>収容人数</th><th>設備</th>
        </tr>
        <tr>
            <td>1</td><td>300</td><td>ドルビーアトモス</td>
        </tr>
        <tr>
            <td>2</td><td>300</td><td>ドルビーアトモス</td>
        </tr>
        <tr>
            <td>3</td><td>300</td><td>ドルビーアトモス</td>
        </tr>
        <tr>
            <td>4</td><td>200</td><td>ドルビーサラウンド7.1</td>
        </tr>
        <tr>
            <td>5</td><td>200</td><td>ドルビーサラウンド7.1</td>
        </tr>
        <tr>
            <td>6</td><td>200</td><td>ドルビーサラウンド7.1</td>
        </tr>
        <tr>
            <td>7</td><td>100</td><td>ドルビーサラウンド7.1</td>
        </tr>
        <tr>
            <td>8</td><td>100</td><td>ドルビーサラウンド7.1</td>
        </tr>
    </table>

    <div id="ttl">
        シアター案内
    </div><!--ttl-->

        <div id="theaterMap">
            シアター1～3
        </div><!--theaterMap-->

        <div id="theaterMap">
            シアター4～6
        </div><!--theaterMap-->

        <div id="theaterMap">
            シアター7～9
        </div><!--theaterMap-->

    <div id="ttl">
        サービス
    </div><!--ttl-->

    <div id="service">
        3D上映
    </div><!--service-->

    <div id="serviceDetails">
        詳細
    </div><!--serviceDetails-->

    <div id="service">
        ナイトショー
    </div><!--service-->

    <div id="serviceDetails">
        詳細
    </div><!--serviceDetails-->

    <div id="service">
        映画総選挙
    </div><!--service-->

    <div id="serviceDetails">
        詳細
    </div><!--serviceDetails-->

</div><!--lefttColumn-->

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