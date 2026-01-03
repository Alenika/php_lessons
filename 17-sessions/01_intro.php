<?php
	/*
	 * Сессии в PHP (⊗ppPmSsInr)
	 * 317 of 447
	 */
	
	// Задача 1
	session_start();
	
	$_SESSION['number1'] = 2;
	$_SESSION['number2'] = 2;
	
	echo "Числа записаны в сессию!<br>";
	echo "<a href='01_test.php'>Перейти на вторую страницу</a>";
