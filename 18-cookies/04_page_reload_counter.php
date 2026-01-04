<?php
	/*
	 * Счетчик обновления страницы на куках в PHP
	 * ⊗ppPmCkPRC
	 * 327 of 447
	 */

	if (!isset($_COOKIE['first_visit'])) {
		$startTime = time();
		
		setcookie('first_visit', $startTime);
		
		$_COOKIE['first_visit'] = $startTime;
		
		echo "Добро пожаловать!<br><br>";
	}
	
	$diff = time() - $_COOKIE['first_visit'];
	
	echo "Вы зашли на страницу $diff секунд(ы) назад";
	
