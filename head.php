
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
	if (!isset($_SESSION["id"])) :
?>
		<form action="login.php">
        	<button id="loginBtnIn">ログイン</button>
		</form>
<?php
	: else :
?>
          <div id="loginNowIn">
              <p><?= $_SESSION["id"] ?></p>
                <a href="mypage.php">マイページ</a>
			          <form action="logout.php">
                  <button id="loginBtnOut">ログアウト</button>
                </form>
          </div>
<?php
	endif;
?>
      </div>
      <nav id="headerMenu">
          <ul id="headerMenuList">
              <li><a href="article.php">上映情報</a></li>
              <li><a href="theater.php">インフォメーション</a></li>
              <li><a href="price.php">料金</a></li>
              <li><a href="access.php">アクセス</a></li>
          </ul>
          <ul id="headerMenuListSub">
            <li>&ensp;
              </li>
            <li>
              <a href="#">お知らせ</a>
              <a href="#">施設案内</a>
              <a href="#">上映設備</a>
              </li>
            <li>
              <a href="#">チケット</a>
              <a href="#">グッズ</a>
              <a href="#">フード・ドリンク</a>
              </li>
            <li>&ensp;
              </li>
          </ul>
      </nav>
    </div>
</header>
<div id="cover">
<div id="wrapper">
