<?php
	/*
	 * Использование сессий на одной странице в PHP
	 * ⊗ppPmSsOP
	 * 319 of 447
	 */
	
	/* ------------- №1 ------------- */
	session_start();
	
	if (!isset($_SESSION['arrival_time'])) {
		$_SESSION['arrival_time'] = time();
		echo "Добро пожаловать! Вы зашли на сайт в первый раз. Обновите страницу.";
	} else {
		$secondsPassed = time() - $_SESSION['arrival_time'];
		echo "Вы зашли на сайт " . $secondsPassed . " сек назад.";
	}
	
