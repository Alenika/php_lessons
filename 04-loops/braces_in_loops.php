<?php
	/*
	 * Необязательность скобок в циклах в PHP
	 */

	// ⊗ppPmLpBO

	/* --------- №1 --------- */
	
	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem)
		echo $elem; // 12345

	
	// ⊗ppPmLpBOP
	
	/* --------- №1 --------- */
	
	// Цикл без тела. elem = 5 (последнее значение)
	
	$arr = [1, 2, 3, 4, 5];
	
	foreach ($arr as $elem);
	echo $elem;