<?php
  $hostName = "localhost";
  $dbmsUser = "root";
  $dbmsPass = ""; 
  $con = mysql_connect($hostName,$dbmsUser,$dbmsPass);
  mysql_select_db("halcinema",$con);
  $date = date("Y-m-d");
  $date3 = date("Y-m-d",mktime(0,0,0,date("m"),date("d")+3,date("Y")));
  $sql = "SELECT image FROM movie WHERE opening_day <= '$date3' AND end_day >= '$date'";
  $res = mysql_query($sql,$con); 
    mysql_close($con);
?>
<header>
  <div id="headerWrapper">
    <a href="index.php"><h1 id="logo">HALCinema</h1></a>
    <div id="headerContent">
      <nav>
          <ul id="headerInfomation">
              <li><a href="#">おしらせ</a></li>
              <li><a href="#">コンセッションにて販売のチキンナゲットについて</a></li>
              <li><a href="#">チケット販売時間変更のご案内〈5月24日（土）上映分～〉</a></li>
          </ul>
      </nav>
      <div id="loginAlert">
          <!-- どう表示だっけ?別ページへリンクある? -->Alert
      </div>
      <div id="loginWrapper">
<?php
	//セッション開始
	session_start();

	//セッションチェック
	if(!isset($_SESSION["id"])){
?>
		<form action="login.php">
        	<button id="loginBtnIn">ログイン</button>
		</form>
<?php
	}else{
?>
          <div id="loginNowIn">
              <p><?= $_SESSION["id"] ?></p>
			  <form action="logout.php">
	              <button id="loginBtnOut">ログアウト</button>
              </form>
          </div>
<?php
	}
?>
      </div>
      <nav id="headerMenu">
          <ul id="headerMenuList">
              <li><a href="article.php">上映情報</a>
                  <ul class="subMenuList">
                      <li><a href="#">スケジュール</a></li>
                      <li><a href="#">作品情報・イベント</a></li>
                  </ul>
              </li>
              <li><a href="theater.php">インフォメーション</a>
                  <ul class="subMenuList">
                      <li><a href="#">お知らせ</a></li>
                      <li><a href="#">施設案内</a></li>
                      <li><a href="#">上映設備</a></li>
                  </ul>
              </li>
              <li><a href="price.php">料金</a>
                  <ul class="subMenuList">
                      <li><a href="#">チケット</a></li>
                      <li><a href="#">グッズ</a></li>
                      <li><a href="#">フード・ドリンク</a></li>
                  </ul>
              </li>
              <li><a href="access.php">アクセス</a></li>
          </ul>
      </nav>
    </div>
</header>
<div id="cover">
<div id="wrapper">
