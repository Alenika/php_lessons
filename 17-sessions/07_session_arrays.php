<?php
	/*
	 * Запись массивов в сессии PHP
	 * ⊗ppPmSsAr
	 * 323 of 447
	 */

	session_start();
	
	$message = null;
	
	if (!empty($_POST)) {
		$_SESSION['userData'] = $_POST;
		
		$message = "Данные успешно сохранены. <a href='07_test.php'>07_test.php</a>";
	}
?>

<form action="" method="post">
	<label for="name">Имя:</label>
	<input id="name" type="text" name="name"><br><br>
	
	<label for="age">Возраст:</label>
	<input id="age" type="number" name="age"><br><br>
	
	<label for="salary">Зарплата:</label>
	<input id="salary" type="number" name="salary"><br><br>
	
	<label for="city">Город:</label>
	<input id="city" type="text" name="city"><br><br>
	<input type="submit" typeof="Отправить">
</form>

<?php if ($message): ?>
	<p><?= $message ?></p>
<?php endif; ?>
