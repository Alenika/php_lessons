<?php
	/**
	 * Рекурсия и многомерные структуры в PHP
	 * ⊗ppPmRcMA
	 */
	
	declare(strict_types=1);
	
	/* ------------- №1 ------------- */
	echo "<h3>Рекурсия и многомерные структуры в PHP</h3>";
	
	$data = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
	
	function printMultiArray($arr) {
		foreach ($arr as $elem) {
			if (is_array($elem)) {
				printMultiArray($elem);
			} else {
				echo $elem;
			}
		}
	}
	
	printMultiArray($data);
