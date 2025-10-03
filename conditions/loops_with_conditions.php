<?php
	/*
	 * Условия в циклах в PHP
	 */

	// ⊗ppPmLpFI
	
	/* ------ №1 ------ */

	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem) {
		if ($elem % 2 != 0) {
			echo $elem . ' '; // 1 3 5
		}
	}
	
	/* ------ №2 ------ */
	
	$arr = [2, 5, 9, 15, 1, 4];
	
	foreach ($arr as $elem) {
		if ($elem > 3 and $elem < 10) {
			echo $elem . ' '; // 5, 9, 4
		}
	}
	
	/* ------ №3 ------ */

	$arr = [1, 2, -3, -4, 6, 8, -9];
	$sum = 0;
	
	foreach ($arr as $elem) {
		if ($elem > 0) {
			$sum += $elem;
		}
	}
	
	echo $sum . ' '; // 17
	
	/* ------ №4 ------ */
	
	$arr = [10, 20, 30, 50, 235, 3000];
	
	foreach ($arr as $elem) {
		$first = (string)$elem;
		if ($first[0] === '1' or $first[0] === '2' or $first[0] === '5') {
			echo $elem . ' '; // 10 20 50 235
		}
	}
	
	/* ------ №5 ------ */

	$arr = [
		1 => 'Понедельник',
		2 => 'Вторник',
		3 => 'Среда',
		4 => 'Четверг',
		5 => 'Пятница',
		6 => 'Суббота',
		7 => 'Воскресенье'
	];
	
	foreach ($arr as $key => $elem) {
		if ($key === 6 or $key === 7) {
			echo "<b>$elem</b>" . ' ';
		} else {
			echo $elem . ' ';
		}
	}
	
	/* ------ №6 ------ */
	$day = 5;
	
	foreach ($arr as $key => $elem) {
		if ($key === 5) {
			echo "<i>$elem</i>" . ' ';
		} else {
			echo $elem . ' ';
		}
	}
	

