<?php

	session_start();

	//セッション情報破棄
	session_destroy();

	header("location:index.php");
	exit;

