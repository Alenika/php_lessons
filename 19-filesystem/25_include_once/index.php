<?php
	/*
	 * Однократное подключение файлов в PHP
	 * ⊗ppPmFSRO
	 * 355 of 447
	 */

	// №1
	require_once 'math.php';
	require_once 'calc.php';
	
	echo getSquare(5) . '<br><br>'; // 25
	echo getArrSquareSum([1, 2, 3]) . '<br><br>'; // 14