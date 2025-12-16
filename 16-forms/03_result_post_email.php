<?php
	// email
	if (isset($_POST['user_email'])) {
		$userEmail = $_POST['user_email'];
		
		echo "Ваш email: $userEmail <br>";
	}
	
	var_dump($_POST['user_email']);
	
	// Данные есть в $_REQUEST
	echo "<br>Ваше email (из \$_REQUEST): " . $_REQUEST['user_email'];
	
	// GET пуст для этого метода
	echo "<br>Массив \$_GET пуст: ";
	print_r($_GET);

	
