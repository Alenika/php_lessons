<?php
	/*
	 * Shortened Code for Saving Default Values in PHP
	 */

	// ⊗ppPmFmVRShC
	
	/* ------------- №1 ------------- */
	$year  = $_GET['year']  ?? date('Y');
	$month = $_GET['month'] ?? date('m');
	$day   = $_GET['day']   ?? date('d');
?>

<form action="" method="GET">
	<input name="year"  value="<?= $year ?>">
	<input name="month" value="<?= $month ?>">
	<input name="day"   value="<?= $day ?>">
	<input type="submit">
</form>

<?php
	if (isset($_GET['year'], $_GET['month'], $_GET['day'])) {
		$inputTimestamp = mktime(0, 0, 0, $month, $day, $year);
		$nextYear = $year + 1;
		$newYearTimestamp = mktime(0, 0, 0,1, 1, $nextYear);
		
		$secondsDiff = $newYearTimestamp - $inputTimestamp;
		$daysRemaining = round($secondsDiff / (60 * 60 * 24));
		
		echo "До Нового Года осталось $daysRemaining дней.";
	}

	