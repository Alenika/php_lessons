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


<h3>3. Делители числа</h3>

<?php
	$divisors = [];
	
	if (!empty($_POST['num_div'])) {
		$num = $_POST['num_div'];
		
		for ($i = 1; $i <= $num; $i++) {
			if ($num % $i === 0) {
				$divisors[] = $i;
			}
		}
	}
?>

<form action="" method="post">
	<label id="n">Введите число:</label>
	<input id="n" type="number" name="num_div">
	
	<br><br>
	
	<input type="submit" value="Найти">
</form>

<?php if (!empty($divisors)): ?>
	<p>Делители: <?= implode(', ', $divisors) ?></p>
<?php endif; ?>


<h3>4. Cписок общих делителей двух чисел</h3>
<?php
	$commonDivisors =[];
	
	if (!empty($_POST['n1']) && !empty($_POST['n2'])) {
		$n1 = $_POST['n1'];
		$n2 = $_POST['n2'];
		
		$min = min($n1, $n2);
		
		for ($i = 1; $i <= $min; $i++) {
			if ($n1 % $i === 0 && $n2 % $i === 0) {
				$commonDivisors[] = $i;
			}
		}
	}
?>

<form action="" method="post">
	<label for="n1">Введите первое число:</label>
	<input id="n1" type="number" name="n1" value="<?= $_POST['n1'] ?? '' ?>">
	<br><br>
	<label for="n2">Введите второе число:</label>
	<input id="n2" type="number" name="n2" value="<?= $_POST['n2'] ?? '' ?>">
	<br><br>
	<input type="submit" value="Найти">
</form>

<?php if ($commonDivisors): ?>
	<p><?= implode(', ', $commonDivisors) ?></p>
<?php endif; ?>
