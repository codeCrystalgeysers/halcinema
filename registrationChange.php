<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/registrationChange.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<title>HAL Cinema</title>
<?php
    include 'head.php';
?>

<script type="text/javascript">

$(function(){
  $(".change").slideUp(0);
});

function action(n){
  $("#change"+n).slideToggle(0);
}

</script>

<main>

    <h2>登録変更画面</h2>
    <div class="formArea">
        <div class="box">
            <div class="left1">
                ※姓名
            </div>
            <div class="left2">
                本間芽衣子
            </div>
            <div class="left3">
                <input type="button" value="変更" onclick="action(1)" />
            </div>
        </div>

        <div id="change1" class="change" />
        	姓：<input type="text" />名：<input type="text" />
        	<br />
        	<input type="button" value="変更する" />
       </div>

        <div class="box">
            <div class="left1">
                ※フリガナ
            </div>
            <div class="left2">
                ホンマメイコ
            </div>
            <div class="left3">
                <input type="button" value="変更" onclick="action(2)" />
            </div>
        </div>

        <div id="change2" class="change" />
        	セイ：<input type="text" />メイ：<input type="text" />
        	<br />
        	<input type="button" value="変更する" />
       </div>

        <div class="box">
            <div class="left1">
                ※性別
            </div>
            <div class="left2">
                女
            </div>
            <div class="left3">
                <input type="button" value="変更" onclick="action(3)" />
            </div>
        </div>

        <div id="change3" class="change" />
            <select name="sex">
            	<option value="男">男</option>
            	<option value="女">女</option>
            </select>
        	<br />
        	<input type="button" value="変更する" />
       </div>

        <div class="box">
            <div class="left1">
                ※生年月日
            </div>
            <div class="left2">
                1994年9月18日
            </div>
            <div class="left3">
                <input type="button" value="変更" onclick="action(4)" />
            </div>
        </div>

        <div id="change4" class="change" />
        	<select name="year">
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
    		<br />
    		<input type="button" value="変更する" />
	    </div>

        <div class="box">
            <div class="left1">
                ※郵便番号
            </div>
            <div class="left2">
                〒332-0023
            </div>
            <div class="left3">
                <input type="button" value="変更" onclick="action(5)" />
            </div>
        </div>

        <div id="change5" class="change" />
        	〒<input type="text" />
	    	<br />
	    	<input type="button" value="変更" />
       </div>

         <div class="box">
            <div class="left1">
                ※都道府県
            </div>
            <div class="left2">
                埼玉県
            </div>
            <div class="left3">
                <input type="button" value="変更" onclick="action(6)" />
            </div>
        </div>

        <div id="change6" class="change" />
        	<select name="state">
	    		<option value="">ﾄﾁｷﾞ</option>
	    		<option value="">埼玉</option>
	    		<option value="">ｸﾞﾝﾏ</option>
	    	</select>
	    	<br />
	    	<input type="button" value="変更" />
       </div>

         <div class="box">
            <div class="left1">
                ※市区町村番地
            </div>
            <div class="left2">
                秩父市1丁目
            </div>
            <div class="left3">
                <input type="button" value="変更" onclick="action(7)" />
            </div>
        </div>

        <div id="change7" class="change" />
        	<input type="text" />
        	<br />
        	<input type="button" value="変更する" />
       </div>

         <div class="box">
            <div class="left1">
                ※マンション名
            </div>
            <div class="left2">
                河合荘203号
            </div>
            <div class="left3">
                <input type="button" value="変更" onclick="action(8)" />
            </div>
        </div>

        <div id="change8" class="change" />
        	<input type="text" />
        	<br />
        	<input type="button" value="変更する" />
       </div>

         <div class="box">
            <div class="left1">
                ※ログインID
            </div>
            <div class="left2">
                mennmatan
            </div>
            <div class="left3">
                <input type="button" value="変更" onclick="action(9)" />
            </div>
        </div>

        <div id="change9" class="change" />
        	<input type="text" />
        	<br />
        	<input type="button" value="変更する" />
       </div>

         <div class="box">
            <div class="left1">
                ※パスワード
            </div>
            <div class="left2">
                **********
            </div>
            <div class="left3">
                <input type="button" value="変更" onclick="action(10)" />
            </div>
        </div>

        <div id="change10" class="change" />
        	<input type="text" />
        	<br />
        	<input type="button" value="変更する" />
       </div>

         <div class="box">
            <div class="left1">
                ※電話番号
            </div>
            <div class="left2">
                0120441222
            </div>
            <div class="left3">
                <input type="button" value="変更" onclick="action(11)" />
            </div>
        </div>

        <div id="change11" class="change" />
        	<input type="text" />
        	<br />
        	<input type="button" value="変更する" />
       </div>

    </div><!--formArea-->
</main>


<?php
    include 'foot.php';
?>