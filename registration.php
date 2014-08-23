<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/registration.css">
<title>HAL Cinema</title>
<?php
    include 'head.php';
?>

<main>

    <h1>新規会員登録画面</h1>
    <div class="formArea">
    <form>
    	<table>
    		<tr>
    			<td>※性名</td><td>性<input type="text">名<input type="text" name="name"></td>
    		</tr>
    		<tr>
    			<td>※フリガナ</td><td>※全角カタカナで入力してください（例　ホンマメイコ<br />セイ<input type="text" name="kana">メイ<input type="text"></td>
    		</tr>
    		<tr>
    			<td>※性別</td><td><select name="sex">
    			<option value="男">男</option>
    			<option value="女">女</option>
    			</select>
				</td>
    		</tr>
    		<tr>
    			<td>※生年月日</td><td><select name="year">
	    			<option value="">1990</option>
	    			<option value="">1991</option>
	    			<option value="">1992</option>
	    			<option value="">1993</option>
	    			<option value="">1994</option>
	    			<option value="">1995</option>
	    			<option value="">1996</option>
	    			<option value="">1997</option>
	    			<option value="">1998</option>
	    			<option value="">1999</option>
	    			<option value="">2000</option>
	    			<option value="">2001</option>
	    			<option value="">2002</option>
	    			<option value="">2003</option>
	    			<option value="">2004</option>
	    			<option value="">2005</option>
	    			<option value="">2006</option>
	    			<option value="">2007</option>
	    			<option value="">2008</option>
	    			<option value="">2009</option>
	    			<option value="">2010</option>
	    			<option value="">2011</option>
	    			<option value="">2012</option>
	    			<option value="">2013</option>
	    			<option value="">2014</option>
	    		</select>年
    			<select name="month">
	    			<option value="">1</option>
	    			<option value="">2</option>
	    			<option value="">3</option>
	    			<option value="">4</option>
	    			<option value="">5</option>
	    			<option value="">6</option>
	    			<option value="">7</option>
	    			<option value="">8</option>
	    			<option value="">9</option>
	    			<option value="">10</option>
	    			<option value="">11</option>
	    			<option value="">12</option>
    			</select>月
    			<select name="day">
	    			<option value="">1</option>
	    			<option value="">2</option>
	    			<option value="">3</option>
	    			<option value="">4</option>
	    			<option value="">5</option>
	    			<option value="">6</option>
	    			<option value="">7</option>
	    			<option value="">8</option>
	    			<option value="">9</option>
	    			<option value="">10</option>
	    			<option value="">11</option>
	    			<option value="">12</option>
	    			<option value="">13</option>
	    			<option value="">14</option>
	    			<option value="">15</option>
	    			<option value="">16</option>
	    			<option value="">17</option>
	    			<option value="">18</option>
	    			<option value="">19</option>
	    			<option value="">20</option>
	    			<option value="">21</option>
	    			<option value="">22</option>
	    			<option value="">23</option>
	    			<option value="">24</option>
	    			<option value="">25</option>
	    			<option value="">26</option>
	    			<option value="">27</option>
	    			<option value="">28</option>
	    			<option value="">29</option>
	    			<option value="">30</option>
	    			<option value="">31</option>
    			</select>日
				</td>
    		</tr>
    		<tr>
    			<td>※郵便番号</td><td>※半角数字、ハイフンなしで入力してください<br />〒<input type="text" name="post"><input type="button" value="住所を検索する" /></td>
    		</tr>
    		<tr>
    			<td>※都道府県</td><td><select name="state">
	    			<option value="">東京</option>
	    			<option value="">名古屋</option>
	    			<option value="">大阪</option>
	    		</select>
	    		</td>
	    	</tr>
    		<tr>
    			<td>※市町村番地</td><td>例）埼玉県秩父市熊木町8番<br /><input type="text" name="address"></td>
    		</tr>
    		<tr>
    			<td>※マンション名</td><td>例）河合荘203号室<br /><input type="text" name="mansion"></td>
    		</tr>
    		<tr>
    			<td>※ログインID</td><td>※○文字以上の半角英数字で入力してください<br /><input type="text" name="id"></td>
    		</tr>
    		<tr>
    			<td rowspan="2">※パスワード</td><td>※半角英数字で入力してください<br />※記号は使用できません<br /><input type="text" name="pass1"></td>
    		</tr>
    		<tr>
    			<td>※パスワードを再入力してください<br /><input type="text" name="pass2"></td>
    		</tr>
    		<tr>
    			<td>※電話番号</td><td><input type="text" name="phonenum"></td>
    		</tr>    		    		    		
    	</table>
    </form>
    </div>

    <div class="formArea">
    <h2>クレジットカード情報</h2>
    <form>
    	<table>
    		<tr>
    			<td>カード会社</td>
    			<td><select name="company">
    				<option>visa</option>
    				<option>JCB</option>
    				<option>MasterCard</option>
    			</select></td>
    		</tr>
    		<tr>
    			<td>カード名義</td><td>例）MEIKO HONMA<br /><input type="text" name="cardname"></td>
    		</tr>
    		<tr>
    			<td>カード番号</td><td>例）1111222233334444<br /><input type="text" name="cardnum"></td>
    		</tr>
    		<tr>
    			<td>有効期限</td><td><select name="monthlimit">
	    			<option value="">1</option>
	    			<option value="">2</option>
	    			<option value="">3</option>
	    			<option value="">4</option>
	    			<option value="">5</option>
	    			<option value="">6</option>
	    			<option value="">7</option>
	    			<option value="">8</option>
	    			<option value="">9</option>
	    			<option value="">10</option>
	    			<option value="">11</option>
	    			<option value="">12</option>
    			</select>月
    			<select>
    				<option>2014</option>
    				<option>2015</option>
    				<option>2016</option>
    				<option>2017</option>
    			</select>年</td>
    		</tr>
    	</table>
    </form>
    </div>

    <div id="conf">
    	<input type="button" value="入力内容を確認する">
    </div>

</main>

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