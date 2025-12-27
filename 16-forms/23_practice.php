<?php
/*
 * Практика на формы в PHP (⊗ppPmFmPrm)
 */

// 316 of 447

?>

<h3>1. Температура (Цельсий -> Фаренгейт)</h3>

<?php
	$result = null;
	if (isset($_POST['celsius'])) {
		$c = $_POST['celsius'];
		$result = $c * 1.8 + 32;
	}
?>

<form action="" method="post">
	<label for="с">Введите градусы (Цельсий)</label>
	<input id="с" type="number" name="celsius"
	value="<?= $_POST['celsius'] ?? '' ?>">
	<input type="submit" value="Конвертировать">
</form>

<?php if ($result): ?>
	<p>Результат: <?= $result ?> Фаренгейт</p>
<?php endif; ?>

<h3>2. Факториал числа</h3>

<?php
	$result2 = null;
	if (isset($_POST['number']) && $_POST['number'] !== '') {
		$number = $_POST['number'];
		$factorial = 1;
		for ($i = 1; $i <= $number; $i++) {
			$factorial *= $i;
		}
		$result2 = $factorial;
	}
?>

<form action="" method="post">
	<label for="number">Введите число:</label>
	<input id="number" type="number" name="number">
	<input type="submit" value="Рассчитать">
</form>

<?php if ($result2): ?>
	<p>Факториал: <?= $result2 ?></p>
<?php endif; ?>
