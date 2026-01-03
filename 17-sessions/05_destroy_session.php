<?php
	/*
	 * Завершение всей сессии в PHP
	 * ⊗ppPmSsDs
	 * 321 of 447
	 */
	
	/* ------------- №1 ------------- */
	session_start();
	
	if (!isset($_SESSION['counter'])) {
		$_SESSION['counter'] = 1;
	} else {
		$_SESSION['counter']++;
	}
	
	echo $_SESSION['counter'] . "<br>";
	
	echo "<a href='05_logout.php'>logout.php</a>";
