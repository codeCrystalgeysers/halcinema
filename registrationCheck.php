<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/registrationCheck.css">
<title>HAL Cinema</title>
<?php
    include 'head.php';
?>

<main>

    <h2>新規会員登録確認画面</h2>
    <div class="formArea">
    	<table>
    		<tr>
    			<td>※性名</td>
                <td>姓&nbsp;：
                	<div class="result">土屋</div>
                    &nbsp;名&nbsp;：
                    <div class="result">新保</div>
                </td>
    		</tr>
    		<tr>
    			<td>※フリガナ</td>
                <td>セイ&nbsp;：
                	<div class="result">ツチヤ</div>
                    &nbsp;メイ&nbsp;：
                    <div class="result">シンボ</div>
                </td>
    		</tr>
    		<tr>
    			<td>※性別</td>
    			<td>
                    <div class="result">男女</div>
				</td>
    		</tr>
    		<tr>
    			<td>※生年月日</td>
                <td>
                	<div class="birthday">2014</div>年
                    <div class="birthday">9</div>月
                    <div class="birthday">3</div>日
				</td>
    		</tr>
    		<tr>
    			<td>※郵便番号</td><td>〒<div class="result">030-3434</div></td>
    		</tr>
    		<tr>
    			<td>※都道府県</td><td><div class="result">東京</div></td>
	    	</tr>
    		<tr>
    			<td>※市区町村番地</td><td><div class="result">新宿区西新宿７－７－７</div></td>
    		</tr>
    		<tr>
    			<td>※マンション名</td><td><div class="result">コクーンタワー</div></td>
    		</tr>
    		<tr>
    			<td>※ログインID</td><td><div class="result">gotoh</div></td>
    		</tr>
    		<tr>
    			<td>※パスワード</td><td><div class="result">jdfijifkf;l</div></td>
    		</tr>

    			<td>※電話番号</td><td><div class="result">03-9898-9889</div></td>
    		</tr>
    	</table>
    </div>

    <div class="formArea">
    <h2>クレジットカード情報</h2>
    	<table>
    		<tr>
    			<td class="itemName">カード会社</td>
    			<td class="cardInfo">
                	<div class="result">life</div>
                </td>
    		</tr>
    		<tr>
    			<td class="itemName">カード名義</td>
                <td class="cardInfo">
                	<div class="result">sinji gotoh</div>
                </td>
    		</tr>
    		<tr>
    			<td class="itemName">カード番号</td>
                <td class="cardInfo">
                	<div class="result">456777778788</div>
                </td>
    		</tr>
    		<tr>
    			<td class="itemName">有効期限</td>
                <td class="cardInfo">
                	<div class="result">3</div>月
    				<div class="result">2017</div>年
               	</td>
    		</tr>
    	</table>
    </div>

    <div id="conf">
    	<input type="button" value="この内容で登録する">
    </div>

</main>


<?php
    include 'foot.php';
?>