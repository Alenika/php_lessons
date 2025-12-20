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


<h3>Калькулятор (умножение)</h3>

<?php
	$result = null;
	
	if (isset($_GET['num1'], $_GET['num2'])) {
		$result = (float)$_GET['num1'] * (float)$_GET['num2'];
	}
?>

<form action="" method="get">
	<label for="num1">Введите первое число</label>
	<input id="num1" type="number" name="num1" value="<?= $_GET['num1'] ?? ''?>" placeholder="Число 1">
	<label for="num2">Введите второе число</label>
	<input id="num2" type="number" name="num2" value="<?= $_GET['num2'] ?? ''?>" placeholder="Число 2">
	<input type="submit" value="Умножить">
</form>

<?php if ($result !== null): ?>
	<p>Результат: <?= $result ?></p>
<?php endif; ?>

<h3>О себе</h3>

<?php
	$age_message = null;
	if (isset($_POST['user_name'], $_POST['year'])) {
		$current_year = 2025;
		$user_year = (int)$_POST['year'];
		$diff = $current_year - $user_year;
		
		$age_message = htmlspecialchars($_POST['user_name']) . ", вам в 2025 году исполняется: " . $diff;
	}
?>

<h3>Анкета</h3>
<form action="" method="post">
	<label for="user_name">Имя:</label>
	<input id="user_name" type="text" name="user_name" value="<?= $_POST['user_name'] ?? '' ?>">
	<label for="year">Год рождения:</label>
	<input id="year" type="number" name="year" value="<?= $_POST['year'] ?? '' ?>">
	<input type="submit" value="Узнать возраст">
</form>

<?php if ($age_message) : ?>
	<p> <?= $age_message ?></p>
<?php endif; ?>

<h3>Конвертер валют</h3>
<?php
	$rub_result = null;
	$rate = 100;
	
	if (isset($_POST['usd'])) {
		$usd_amount = (int)$_POST['usd'];
		$rub_result = $usd_amount * $rate;
		
		$message = "Сумма в рублях составит: $rub_result";
		
	}
?>

<form action="" method="post">
	<label for="usd">Сумма в долларах:</label>
	<input id="usd" type="number" name="usd" value="<?= $_POST['usd_amount'] ?? '' ?>">
	<input type="submit" value="Конвертировать">
</form>

<?php if ($message) : ?>
	<p><?= $message ?></p>
<?php endif; ?>

<h3>Калькулятор стоимости доставки</h3>

<?php
	$weight = null; // кг
	$distance = null; // км
	
	if (isset($_POST['weight'], $_POST['distance'])) {
		$weight = (int)$_POST['weight'];
		$distance = (int)$_POST['distance'];
		
		$total = 500 + ($weight * 50) + ($distance * 10);
		$message = "Стоимость доставки: $total руб.";
	}
?>

<form action="" method="post">
	<label for="weight">Вес посылки в килограммах:</label>
	<input id="weight" type="number" name="weight" value="<?= $_POST['weight'] ?? '' ?>">
	<br><br>
	<label for="distance">Расстояние в километрах</label>
	<input id="distance" type="number" name="distance" value="<?= $_POST['distance'] ?? '' ?>">
	<input type="submit" value="Рассчитать">
</form>

<?php if ($message) : ?>
	<p><?php echo $message ?></p>
<?php endif; ?>

<h3>Форма бронирования</h3>

<?php
	if (isset ($_POST['days'], $_POST['breakfast_price'])) {
		$days = (float)$_POST['days'];
		$breakfast_price = (float)$_POST['breakfast_price'];
		$total_cost = (3000 + $breakfast_price) * $days;
		$message = "Итоговая стоимость бронирования: $total_cost руб.";
	}
?>

<form action="" method="post">
	<label for="days">Количество дней</label>
	<input id="days" type="number" name="days" value="<?= $_POST['days'] ?? '' ?>">
	<label for="breakfast_price">Цена завтрака в день</label>
	<input id="breakfast_price" type="number" name="breakfast_price" value="<?= $_POST['breakfast_price'] ?? '' ?>">
	<input type="submit" value="Рассчитать">
</form>

<?php if ($message) : ?>
	<p><?= $message ?></p>
<?php endif; ?>

