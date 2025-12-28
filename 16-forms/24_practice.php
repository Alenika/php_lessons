<?php
/*
* Практика на формы в PHP (⊗ppPmFmPrm)
*/

// 316 of 447

?>

<h3>Задача 5: Корень квадратного уравнения</h3>

<?php
	$a = $_POST['a'] ?? '';
	$b = $_POST['b'] ?? '';
	$c = $_POST['c'] ?? '';
	
	$message = '';
	
	if ($a !== '' && $b !== '' && $c !== '') {
		$a = (float)$a;
		$b = (float)$b;
		$c = (float)$c;
		
		if ($a == 0) {
			$message = 'Ошибка: коэффициент а не может быть равен 0.';
		} else {
			$d = $b * $b - 4 * $a * $c;
			
			if ($d > 0) {
				$x1 = (-$b + sqrt($d)) / (2 * $a);
				$x2 = (-$b - sqrt($d)) / (2 * $a);
				$message = "Два корня: x1 = $x1, x2 = $x2";
			} elseif ($d == 0) {
				$x = -$b / (2 * $a);
				$message = "Один корень: x = $x";
			} else {
				$message = 'Действительных корней нет (D < 0).';
			}
		}
	}
?>

<form action="" method="post">
	<label for="a">Коэффициент a:</label>
	<input id="a" type="number" name="a" value="<?= $a ?>"><br><br>

	<label for="b">Коэффициент b:</label>
	<input id="b" type="number" name="b" value="<?= $b ?>"><br><br>

	<label for="c">Коэффициент c:</label>
	<input id="c" type="number" name="c" value="<?= $c ?>"><br><br>

	<input type="submit" value="Найти корни">
</form>

<?php if (!empty($message)): ?>
	<p><?= $message ?></p>
<?php endif; ?>





