<?php
	/*
	 * Мгновенное удаление кук в PHP
	 * ⊗ppPmCkIR
	 * 330 of 447
	 */
	
	if (!isset($_COOKIE['test_instant_delete'])) {
		setcookie('test_instant_delete', 'Данные есть', time() + 3600);
		
		$_COOKIE['test_instant_delete'] = 'Данные есть';
		
		echo "Шаг 1: Кука создана, обновите страницу.<br><br>";
	} else {
		setcookie('test_instant_delete', '', time() - 3600);
		
		unset($_COOKIE['test_instant_delete']);
		
		echo "Шаг 2: Кука удалена из браузера и массива<br><br>";
	}
	
	echo "Проверка через var_dump: ";
	var_dump($_COOKIE['test_instant_delete'] ?? 'Данных больше нет!');