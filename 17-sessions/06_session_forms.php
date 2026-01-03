<?php
	/*
	 * Сессии и формы в PHP
	 * ⊗ppPmSsFr
	 * 322 of 447
	 */

	echo "№1<br><br>";
	
	session_start();
	
	if (!empty($_POST)) {
		$_SESSION['surname'] = $_POST['surname'];
		$_SESSION['name'] = $_POST['name'];
		$_SESSION['age'] = $_POST['age'];
		
		echo "<a href='06_test.php'>06_test.php</a>";
	}
?>

<form action="" method="POST">
	<input name="surname" placeholder="Фамилия"><br><br>
	<input name="name" placeholder="Имя"><br><br>
	<input name="age" type="number" placeholder="Возраст"><br><br>
	<input type="submit" value="Отправить">
</form>
	
