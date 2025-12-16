<?php
	/*
	 * Saving Form Values After Submission in PHP
	 */

	// ⊗ppPmFmVR
	
	/* ------------- №1 ------------- */
?>

<form action="" method="GET">
	<label for="city">Город:</label>
	<input id="city" type="text" name="city" value="
	<?php if (isset($_GET['city']))
			echo $_GET['city'] ?>">

	<label for="country">Страна:</label>
	<input id="country" type="text" name="country" value="
	<?php if (isset($_GET['country']))
		echo $_GET['country'] ?>">
	
	<input type="submit" value="Отправить">
</form>

<?php
	// Сохранение логина и пароля
	$message = null;
	
	if (isset($_POST['login'], $_POST['password'])) {
		$login = $_POST['login'];
		echo "Данные успешно отправлены.";
	}
?>

<h3>Сохранение логина и пароля</h3>
<form action="" method="post">
	<label for="login">Введите логин</label>
	<input id="login" type="text" name="login" value="
	<?= $_POST['login'] ?? '' ?>">
	<label for="password">Введите пароль</label>
	<input id="password" type="password" name="password">
	<input type="submit" value="Отправить">
</form>





	


