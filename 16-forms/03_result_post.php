<?php
	// Существует ли ключ "name"
	if (isset($_POST['name'])) {
		$userName = $_POST['name'];
		
		echo "<h2>Метод POST:</h2>";
		echo "Ваше имя (из \$_POST): " . $userName;
	}
	
	// Данные есть в $_REQUEST
	echo "<br>Ваше имя (из \$_REQUEST): " . $_REQUEST['name'];
	
	// GET пуст для этого метода
	echo "<br>Массив \$_GET пуст: ";
	print_r($_GET);
	

