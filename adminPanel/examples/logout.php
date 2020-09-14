<?php
	session_start();
	session_unset();
	session_destroy();
	header("Location: /JotaJoti2020/home.php");
