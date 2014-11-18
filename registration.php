<!doctype html>
<meta charset="UTF-8">
<meta name="Author" content="codeCrystalgeysers">
<meta name="Keywords" content="HALCinema, ハルシネマ, 映画, えいが">
<link rel="stylesheet" type="text/css" href="css/common.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<title>HAL Cinema</title>
<?php
    include 'head.php';
?>

<main>

    <h2>新規会員登録画面</h2>
    <div class="formArea">
    <form action="registrationCheck.php" method="POST">
    	<table>
    		<tr>
    			<td class="">※姓名</td>
				<td>姓<input type="text" name="lastName">名<input type="text" name="firstName"></td>
    		</tr>
    		<tr>
    			<td>※フリガナ</td>
				<td>※全角カタカナで入力してください（例　ホンマメイコ<br />
				セイ<input type="text" name="kanaLastName">メイ<input type="text" name="kanaFirstName"></td>
    		</tr>
    		<tr>
    			<td>※性別</td>
    			<td>
                    <input type="radio" name="sex" value="男" />男
            		<input type="radio" name="sex" value="女" />女
				</td>
    		</tr>
    		<tr>
    			<td>※生年月日</td><td><select name="birthYear">
					<?php
						$nowYear = date("Y");
    					for($i=1970;$i<=$nowYear;$i++){
    						echo "<option value=".$i.">".$i;
    					}
    				?>
	    		</select>年
    			<select name="birthMonth">
    				<?php 
    					for($i=1;$i<13;$i++){
    						echo "<option value=".$i.">".$i;
    					}
    				?>
    			</select>月
    			<select name="birthDay">
    				<?php
    					for($i=1;$i<32;$i++){
    						echo "<option value=".$i.">".$i;
    					}
    				?>
    			</select>日
				</td>
    		</tr>
    		<tr>
    			<td>※郵便番号</td><td>※半角数字、ハイフンなしで入力してください<br />〒<input type="text" name="post"><input type="button" value="住所を検索する" /></td>
    		</tr>
    		<tr>
    			<td>※都道府県</td><td><select name="state">
					<option value="" selected>--選択--
					<option value="北海道">北海道
					<option value="青森県">青森県
					<option value="岩手県">岩手県
					<option value="宮城県">宮城県
					<option value="秋田県">秋田県
					<option value="山形県">山形県
					<option value="福島県">福島県
					<option value="茨城県">茨城県
					<option value="栃木県">栃木県
					<option value="群馬県">群馬県
					<option value="埼玉県">埼玉県
					<option value="千葉県">千葉県
					<option value="東京都">東京都
					<option value="神奈川県">神奈川県
					<option value="新潟県">新潟県
					<option value="富山県">富山県
					<option value="石川県">石川県
					<option value="福井県">福井県
					<option value="山梨県">山梨県
					<option value="長野県">長野県
					<option value="岐阜県">岐阜県
					<option value="静岡県">静岡県
					<option value="愛知県">愛知県
					<option value="三重県">三重県
					<option value="滋賀県">滋賀県
					<option value="京都府">京都府
					<option value="大阪府">大阪府
					<option value="兵庫県">兵庫県
					<option value="奈良県">奈良県
					<option value="和歌山県">和歌山県
					<option value="鳥取県">鳥取県
					<option value="島根県">島根県
					<option value="岡山県">岡山県
					<option value="広島県">広島県
					<option value="山口県">山口県
					<option value="徳島県">徳島県
					<option value="香川県">香川県
					<option value="愛媛県">愛媛県
					<option value="高知県">高知県
					<option value="福岡県">福岡県
					<option value="佐賀県">佐賀県
					<option value="長崎県">長崎県
					<option value="熊本県">熊本県
					<option value="大分県">大分県
					<option value="宮崎県">宮崎県
					<option value="鹿児島県">鹿児島県
					<option value="沖縄県">沖縄県
	    		</select>
	    		</td>
	    	</tr>
    		<tr>
    			<td>※市区町村番地</td><td>例）埼玉県秩父市熊木町8番<br /><input type="text" name="address"></td>
    		</tr>
    		<tr>
    			<td>※マンション名</td><td>例）河合荘203号室<br /><input type="text" name="mansion"></td>
    		</tr>
    		<tr>
    			<td>※ログインID</td><td>※○文字以上の半角英数字で入力してください<br /><input type="text" name="id"></td>
    		</tr>
    		<tr>
    			<td rowspan="2">※パスワード</td><td>※半角英数字で入力してください<br />※記号は使用できません<br /><input type="password" name="pass1"></td>
    		</tr>
    		<tr>
    			<td>※パスワードを再入力してください<br /><input type="password" name="pass2"></td>
    		</tr>
    		<tr>
    			<td>※電話番号</td><td><input type="text" name="phoneNum"></td>
    		</tr>
    	</table>
   <!-- </form>-->
    </div>

    <div class="formArea">
    <h2>クレジットカード情報</h2>
   <!-- <form>-->
    	<table>
    		<tr>
    			<td>カード会社</td>
    			<td><select name="company">
    				<option value="visa">visa
    				<option value="JCB">JCB
    				<option value="MasterCard">MasterCard
    			</select></td>
    		</tr>
    		<tr>
    			<td>カード名義</td><td>例）MEIKO HONMA<br /><input type="text" name="cardName"></td>
    		</tr>
    		<tr>
    			<td>カード番号</td><td>例）1111222233334444<br /><input type="text" name="cardNum"></td>
    		</tr>
    		<tr>
    			<td>有効期限</td><td><select name="limitMonth">
	    			<?php 
    					for($i=1;$i<13;$i++){
    						echo "<option value=".$i.">".$i;
    					}
    				?>
    			</select>月
    			<select name="limitYear">
    				<?php 
    					for($i=0;$i<4;$i++){
							$limitYear = $nowYear + $i;
    						echo "<option value=".$limitYear.">".$limitYear;
    					}
    				?>
    			</select>年</td>
    		</tr>
    	</table>
    <!--</form>-->
    </div>

    <div id="conf">
		<!--<form action="registrationCheck.php">-->
    		<input type="submit" value="入力内容を確認する">
		</form>
    </div>

</main>


<?php
    include 'foot.php';
?>