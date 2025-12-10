<?php
	/*
	 * Saving Form Default Value in PHP
	 */
	
	// ⊗ppPmFmVRDV
	
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