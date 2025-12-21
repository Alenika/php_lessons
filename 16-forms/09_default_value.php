<?php
	/*
	 * Saving Form Default Value in PHP
	 */
	
	// ⊗ppPmFmVRDV
	// Урок 302
	
	$currentYear = date('Y'); // текущий год
	
	$yearValue = $_POST['year'] ?? $currentYear;
	
	if (isset($_POST['year'])) {
		
		$year = (int)$yearValue;
		
		if ($year > 0) {
			
			$isLeap = ($year % 400 === 0) || ($year % 4 === 0 && $year % 100 !== 0);
			
			if ($isLeap) {
				echo "Год {$year} является високосным.";
			} else {
				echo "Год {$year} не является високосным.";
			}
		} else {
			echo "Введите корректный год.";
		}
		echo "<hr>";
	}
?>

<form action="" method="POST">
	<label for="year">Введите год:</label>
	<input
			type="text"
			name="year"
			id="year"
			value="<?php echo $yearValue; ?>"
	>
	<input type="submit" value="Проверить">
</form>

<h3>Калькулятор скидки</h3>
<?php
	$defaultDiscount = 10; // скидка по умолчанию
	
	$priceValue = $_POST['price'] ?? '';
	$discountValue = $_POST['discount'] ?? $defaultDiscount;
	$resultMessage = null;
	
	if (isset($_POST['price'])) {
		$price = (float)$priceValue;
		$discount = (float)$discountValue;
		
		if ($price > 0) {
			$finalPrice = $price - ($price * ($discount / 100));
			$resultMessage = "Цена со скидкой: $finalPrice руб.";
		} else {
			$resultMessage = "Пожалуйста, введите корректную цену.";
		}
	}
?>

<form action="" method="post">
	<label for="price">Цена товара:</label>
	<input id="price" type="number" name="price" value="<?= $priceValue ?>"
	<br><br><br>
	<label for="discount">Скидка (%):</label>
	<input id="discount" type="number" name="discount" value="<?= $discountValue ?>">
	<br><br>
	<input type="submit" value="Рассчитать">
</form>

<?php if ($resultMessage) : ?>
	<p><?= $resultMessage ?></p>
<?php endif; ?>

<h3>Форма редактирования профиля (город)</h3>

<?php
	$default_city = 'Москва';
	$message = null;
	
	$user_name = $_POST['user_name'] ?? '';
	$user_city = $_POST['user_city'] ?? $default_city;
	
	if (isset($_POST['user_name'], $_POST['user_city'])) {
		$message = "Данные обновлены! Имя: $user_name, Город: $user_city";
	}
?>

<form action="" method="post">
	<label for="user_name">Введите имя:</label>
	<input id="user_name" type="text" name="user_name" value="<?= $user_name ?>">
	<label for="user_city">Введите город:</label>
	<input id="user_city" type="text" name="user_city" value="<?= $user_city ?>">
	<input type="submit" value="Отправить">
</form>

<?php if ($message) : ?>
	<p><?= $message ?></p>
<?php endif; ?>
