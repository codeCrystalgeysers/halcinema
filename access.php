<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<script src="js/jq2min.js"></script>
<script src="js/topSlider.js"></script>
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/access.css">
<title>HAL Cinema</title>

<?php
    include 'head.php';
?>

<div id="lefttColumn">
    <h3>料金</h3>
    <div id="map">
        グーグルマップ
    </div><!--map-->

    <div id="hal">
        HAL東京
    </div><!--hal-->
    <div id="hal">
        HAL大阪
    </div><!--hal-->
    <div id="hal">
        HAL名古屋
    </div><!--hal-->

    <table id="details">
        <tr>
            <td>住所</td>
        </tr>
        <tr>
            <td>電話番号</td>
        </tr>
    </table>

    <table id="details">
        <tr>
            <td>駐車場</td>
        </tr>
        <tr>
            <td>関連施設</td>
        </tr>
    </table>

    <table id="details">
        <tr>
            <td>車をご利用の方</td>
        </tr>
        <tr>
            <td>電車をご利用の方</td>
        </tr>
    </table>

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