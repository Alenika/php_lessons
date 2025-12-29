<?php
/*
* Практика на формы в PHP (⊗ppPmFmPrm)
*/

// 316 of 447

?>

<h3>Задача 6: Тройка Пифагора</h3>

<?php
	$message = null;
	
	if (isset($_POST['num1'], $_POST['num2'], $_POST['num3'])) {
		$nums = [
			(int)$_POST['num1'],
			(int)$_POST['num2'],
			(int)$_POST['num3']
		];
		
		sort($nums);
		
		$sumOfSquares = ($nums[0] ** 2) + ($nums[1] ** 2);
		$hypotenuseSquare = $nums[2] ** 2;
		
		if ($sumOfSquares === $hypotenuseSquare) {
			$message = "Да, это тройка Пифагора.";
		} else {
			$message = "Нет, это не тройка Пифагора.";
		}
	}
?>

<form action="" method="post">
	<label for="num1">Введите первое число:</label>
	<input id="num1" type="number" name="num1"
	<?= htmlspecialchars($_POST['num1'] ?? '') ?>>
	<br><br>
	<label for="num2">Введите второе число:</label>
	<input id="num2" type="number" name="num2"
	<?= htmlspecialchars($_POST['num2'] ?? '') ?>>
	<br><br>
	<label for="num3">Введите третье число:</label>
	<input id="num3" type="number" name="num3"
	<?= htmlspecialchars($_POST['num3'] ?? '') ?>>
	<br><br>
	<input type="submit" value="Проверить">
</form>

<?php if ($message): ?>
	<p><?= $message ?></p>
<?php endif; ?>
