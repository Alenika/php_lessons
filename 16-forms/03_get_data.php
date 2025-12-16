<?php
	/*
	 * Retrieving Form Data in PHP
	 */

	// ⊗ppPmFmDG
	
	/* ------------- №1 ------------- */
?>

<form action="/03_result_get.php" method="get">
	<label for="03_age">Ваш возраст:</label>
	<input id="03_age" type="text" name="age" placeholder="Возраст">
	<input type="submit" value="Отправить (GET)">
</form>

<form action="/03_result_post.php" method="post">
	<label for="03_name">Ваше имя:</label>
	<input id="03_name" type="text" name="name" placeholder="Имя">
	<input type="submit" value="Отправить (POST)">
</form>

<h3>Введите email</h3>
<form action="/03_result_post_email.php" method="post">
	<input id="user_email" type="email" name="user_email" placeholder="Email">
	<input type="submit" value="Отправить (POST)">
</form>






