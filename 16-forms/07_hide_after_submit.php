<?php
	/*
	 * Hiding the Form After Submission in PHP
	 */
	
	// ⊗ppPmFmHAS
	
	/* ------------- №1 ------------- */
	// Первый заход (нет данных), условие истинно, показывает форму
	if (empty($_GET)) {
?>
<h3>/* ------------- №1 ------------- */</h3>
<form action = "" method = "GET">
	<label for="name">Как вас зовут?</label>
	<input id="name" type="text" name="name" placeholder="Антон">
	<input type = "submit" value = "Отправить">
</form>

<?php
	// После отправки(есть данные), условие if (empty($_POST)) ложно
	// Пропускает форму и выполняет код в блоке else
	} else {
		echo "Привет, {$_GET['name']}";
	}
?>

<?php
	if (isset($_POST['email'])) {
?>

<h3>/* ------------- №2 ------------- */</h3>
<h3>Скрытие сброса пароля</h3>

<form action="" method="post">
	<label for="email">Введите ваш Email</label>
	<input id="email" type="email" name="email">
	<input type="submit" value="Отправить">
</form>

<?php
	} else {
		echo "Инструкция по сбросу пароля отправлена на почту: {$_POST['email']}";
	}
?>