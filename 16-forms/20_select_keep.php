<?php
/*
 * Сохранение значения в селектах после отправки в PHP
 */

// ⊗ppPmFmSSV
// 313 of 447

?>

<h3>Задача 2</h3>
<?php
	$message = null;
	
	if (isset($_POST['country'])) {
		$country = $_POST['country'];
		$message = $country;
	}
?>

<form action="" method="post">
	<label for="country">Выберите вашу страну:</label>
	<select id="country" name="country">
		
		<option value="be" <?php if (!empty($_POST['country']) && $_POST['country'] === 'be') echo 'selected'; ?>>
			Беларусь
		</option>
		
		<option value="ru" <?php if (!empty($_POST['country']) && $_POST['country'] === 'ru') echo 'selected'; ?>>
			Россия
		</option>
		
		<option value="kz" <?php if (!empty($_POST['country']) && $_POST['country'] === 'kz') echo 'selected'; ?>>
			Казахстан
		</option>
		
		<option value="uz" <?php if (!empty($_POST['country']) && $_POST['country'] === 'us') echo 'selected'; ?>>
			Узбекистан
		</option>
		
		<option value="ar" <?php if (!empty($_POST['country']) && $_POST['country'] === 'ar') echo 'selected'; ?>>
			Армения
		</option>
	</select>
	
	<br><br>
	
	<input type="submit" value="Выбрать">
</form>

<?php if ($message): ?>
	<p><?= $message ?></p>
<?php endif; ?>
