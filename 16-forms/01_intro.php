<?php
	/*
	 * Basics of Working with Forms in PHP
	 */
	
	// ⊗ppPmFmInr
	
	/* ------------- №1 ------------- */
?>

<form action="" method="GET">
	<label for="name">Имя</label>
	<input id="name" type="text"   name="name"   placeholder="Имя">
	
	<label for="age">Возраст</label>
	<input id="age" type="number" name="age"    placeholder="Возраст">
	
	<label for="salary">Зарплата</label>
	<input id="salary" type="number" name="salary" placeholder="Зарплата">
	
	<input type="submit" value="Отправить">
</form>

<h3>2. Введите имя и фамилию</h3>
<form action="" method="GET">
	<input id="name2" type="text" name="name" placeholder="Имя">
	<input id="surname" type="text" name="surname" placeholder="Фамилия">
	<input type="submit" value="Отправить">
</form>

<h3>3. Введите город и страну</h3>
<form action="" method="GET">
	<input id="city" type="text" name="city" placeholder="Город">
	<input id="country" type="text" name="country" placeholder="Страна">
	<input type="submit" value="Отправить">
</form>

<h3>4. Введите логин, email и пароль</h3>
<form action="" method="GET">
	<input id="login" type="text" name="login" placeholder="Логин">
	<input id="email" type="email" name="email" placeholder="Email">
	<input id="password" type="password" name="password" placeholder="Пароль">
	<input type="submit" value="Отправить">
</form>

<h3>5. Введите число товара и его цену</h3>
<form action="" method="GET">
	<input id="quantity" type="number" name="quantity" placeholder="Количество товара">
	<input id="price" type="number" name="price" placeholder="Стоимость">
	<input type="submit" value="Отправить">
</form>

<h3>Введите марку машины, модель и год</h3>
<form action="" method="GET">
	<input id="brand" type="text" name="car_brand" placeholder="Марка машины">
	<input id="model" type="text" name="car_model" placeholder="Модель машины">
	<input id="year" type="number" name="car_year" placeholder="Год">
	<input type="submit" value="Отправить">
</form>



