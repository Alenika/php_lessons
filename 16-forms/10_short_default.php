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
		$inputDate = new DateTime("$year-$month-$day");
		$newYear   = new DateTime(($year + 1) . '-01-01');
		
		$diff = $inputDate->diff($newYear)->days;
		
		echo "До Нового Года осталось $diff дней.";
	}

	