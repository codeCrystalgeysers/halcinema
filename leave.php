<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<script src="js/jq2min.js"></script>
<script src="js/topSlider.js"></script>
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/leave.css">
<title>HAL Cinema</title>

<?php
    include 'head.php';
?>

<div id="lefttColumn">
    <h3>退会ページ</h3>


    <form action="">
        退会理由
        <select name="退会理由">
            <option value="sentaku">--選択してください--</option>
            <option value="sentaku">つまんない</option>
            <option value="sentaku">つかいづらい</option>
            <option value="sentaku">映画見ない</option>
        </select><br /><br />
        自由入力<input type="text" style="width : 300px; height : 200px"><br /><br />
        <input type="submit" value="入力内容確認" id="push">
    </form>
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