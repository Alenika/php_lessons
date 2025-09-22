<?php
	/*
	 * Порядок элементов в массивах в PHP
	 */

	// ⊗ppPmArEO №1
	
	$months = [
		1 => 'Январь',
		2 => 'Февраль',
		3 => 'Март',
		4 => 'Апрель',
		5 => 'Май',
	];
	
	$shuffled = [
		5 => 'Май',
		3 => 'Март',
		1 => 'Январь',
		4 => 'Апрель',
		2 => 'Февраль',
	];
	
	echo $months[1] . ' ' . $months[2] . ' ' . $months[3] . ' ' . $months[4] . ' ' . $months[5];
	echo $shuffled[1] . ' ' . $shuffled[2] . ' ' . $shuffled[3] . ' ' . $shuffled[4] . ' ' . $shuffled[5];