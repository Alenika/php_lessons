<?php
	// ⊗ppPmFmDGEP
	
	/* ------------- №3 ------------- */
	
	if (isset ($_POST['year'])) {
		$year = (int)$_POST['year'];
		$month = (int)$_POST['month'];
		$day = (int)$_POST['day'];
		
		$timestamp = mktime(0, 0, 0, $month, $day, $year);
		
		$dayOfWeek = date('l', $timestamp);
		
		echo "<h2>День рождения: </h2>" . $dayOfWeek;
	} else {
		echo "Форма не отправлена";
	}
