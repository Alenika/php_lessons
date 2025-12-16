<?php
	/*
	 * Retrieving Form Data Using the POST Method in PHP
	 */

	// ⊗ppPmFmDGEP

?>

	/* ------------- №1 ------------- */

<form action="/05_result_task1.php" method = "POST">
	<label for="task1_name">Введите ваше имя: </label>
	<input id="task1_name" type = "text" name="name" placeholder = "Имя">
	<br><br>
	<label for="task1_age">Введите ваш возраст: </label>
	<input id="task1_age" type = "text" name="age" placeholder = "Возраст">
	<br><br>
	<input type = "submit" value = "Отправить POST">
</form>

	/* ------------- №2 ------------- */

<form action = "/05_result_task2.php" method = "POST">
	<label for="task2_password">Введите ваш пароль: </label>
	<input id="task2_password" type = "password" name = "pass">
	<input type = "submit" value="Отправить">
</form>

	/* ------------- №3 ------------- */
<form action="/05_result_task3.php" method = "POST">
	<label for="task3_year">Введите ваш год рождения: </label>
	<input id="task3_year" type="text" name = "year" placeholder = "2000">
	<br><br>
	<label for="task3_month">Введите месяц рождения: </label>
	<input id="task3_month" type = "text" name = "month" placeholder = "12">
	<br><br>
	<label for="task3_day">Введите дату рождения: </label>
	<input id="task3_day" type = "text" name = "day" placeholder = "12">
	<br><br>
	<input type = "submit" value="Отправить">
</form>
