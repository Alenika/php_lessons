<?php
	/*
	 * Удаление сессий в PHP
	 * ⊗ppPmSsRm
	 * 320 of 447
	 */
	
	/* ------------- №1 ------------- */
	session_start();
	
	if (!isset($_SESSION['counter'])) {
		$_SESSION['counter'] = 1;
	} else {
		$_SESSION['counter']++;
		
		if ($_SESSION['counter'] == 10) {
			unset($_SESSION['counter']);
		}
	}
	
	echo $_SESSION['counter'];
