<?php
	/*
	 * Form Submission Method in PHP
	 */

	// ⊗ppPmFmFSM
	
	/* ------------- №1 ------------- */
	// array(2) { ["test1"]=> string(1) "1" ["test2"]=> string(1) "2" }
	// array(0) { }
	// http://localhost:8000/02_result.php?test1=1&test2=2
	// Данные видны в адресной строке
	
	// array(0) { }
	// array(2) { ["test1"]=> string(1) "1" ["test2"]=> string(1) "2" }
	// http://localhost:8000/02_result.php
	// Данные идут «внутри» запроса, в адресе их не видно
	
?>

<form action = "/02_result.php" method = "GET">
	<input type="text" name="test1" placeholder="Test 1">
	<input type="text" name = "test2" placeholder="Test 2">
	<input type="submit" value="Отправить (GET)">
</form>

<form action = "/02_result.php" method = "POST">
	<input type="text" name="test1" placeholder="Test 1">
	<input type="text" name = "test2" placeholder="Test 2">
	<input type="submit" value="Отправить (POST)">
</form>

<h3>Введите имя и возраст</h3>
<form action="/02_result.php" method="get">
	<input id="name" type="text" name="user_name" placeholder="Имя">
	<input id="age" type="number" name="user_age" placeholder="Возраст">
	<input type="submit" value="Отправить (GET)">
</form>

<h3>Введите сообщение</h3>
<form action="/02_result.php" method="post">
	<input id="user_message" type="text" name="user_message" placeholder="Введите сообщение">
	<input type="submit" value="Отправить (POST)">
</form>

<h3>Введите город, страну и индекс</h3>
<form action="/02_result.php" method="get">
	<input id="city" type="text" name="city" placeholder="Город">
	<input id="country" type="text" name="country" placeholder="Страна">
	<input id="zip_code" type="number" name="zip" placeholder="Индекс">
	<input type="submit" value="Отправить (GET)">
</form>

<h3>Введите логин и пароль</h3>
<form action="/02_result.php" method="post">
	<input id="login" type="text" name="login" placeholder="Логин">
	<input id="password" type="password" name="password" placeholder="Пароль">
	<input type="submit" value="Отправить (POST)">
</form>

<h3>Введите товар и стоимость</h3>
<form action="/02_result.php" method="post">
	<input id="product" type="text" name="product" placeholder="Товар">
	<input id="price" type="number" name="price" placeholder="Цена">
	<input type="submit" value="Отправить (POST)">
</form>
