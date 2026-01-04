<?php
	/*
	 * Мгновенная установка кук в PHP
	 * ⊗ppPmCkIS
	 * 326 of 447
	 */

	if (!isset($_COOKIE['cookie'])) {
		$value = "Я знаю эту куку!";
		
		setcookie('cookie', $value);
		
		echo 'Кука тут впервые!';
	} else {
		echo "Кука уже была здесь!<br><br>";
	}
	
	echo "Что сказал браузер? - " . $_COOKIE['cookie'];
