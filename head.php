<header>
  <div id="headerWrapper">
    <h1 id="logo">HALCinema</h1>
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
          <button id="loginBtnIn">ログイン</button>
          <div id="loginNowIn">
              <p>IDまたは名前表示</p>
              <button id="loginBtnOut">ログアウト</button>
          </div>
      </div>
      <nav id="headerMenu">
          <ul id="headerMenuList">
              <li><a href="index.php">HOME</a></li>
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
    <div id="login">
<?php
	//セッション開始
	session_start();

	//セッションチェック
	if(!isset($_SESSION["id"])){			
?>
	    <form action="login.php">
            <button id="btnLogin">ログイン</button>
        </form>
<?php
	}else{
?>
        <div id="nowLogin">
            <p><?= $_SESSION["id"] ?></p>
			<form action="logout.php">
            	<button id="btnLogout">ログアウト</button>
			</form>
        </div>
<?php
	}
?>
    </div>
    <nav id="headMenu">
        <ul>
            <li><a href="index.php">HOME</a></li>
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
</header>
<div id="wrapper">
