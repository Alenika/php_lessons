<?php
	/*
	 * Для обработки
	 */

	// Существует ли ключ "age"
	if (isset($_GET['age'])) {
		$userAge = $_GET['age'];
		
		echo "<h2>Метод GET:</h2>";
		echo "Ваш возраст (из GET): " . $userAge;
	}
	
	// Данные есть в $_REQUEST
	echo "<br>Ваш возраст (из \$_REQUEST):" . $_REQUEST['age'];
	
	// $_POST пуст для этого метода
	echo "<br>Массив \$_POST пуст: ";
	print_r($_POST);