<?php
	/**
	 * Сумма элементов массива в PHP
	 * ⊗ppPmRcMAS
	 */
	
	declare(strict_types=1);
	
	/* ------------- №1: Сумма многомерного массива ------------- */
	echo "<h3>Сумма многомерного массива</h3>";
	$data = [1, 2, 3, [4, 5, [6, 7]], [8, [9, 10]]];
	
	function getSumRecursive(array $array): int {
		$sum = 0;
		
		foreach ($array as $elem) {
			if (is_array($elem)) {
				$sum += getSumRecursive($elem);
			} else {
				$sum += $elem;
			}
		}
		
		return $sum;
	}
	
	echo "Сумма чисел: ";
	var_dump(getSumRecursive($data));
	
	/* ------------- №2: Склеивание строк из массива ------------- */
	echo "<h3>Рекурсивно собирает все строковые элементы в одну строку.</h3>";
	
	$data2 = ['a', ['b', 'c', 'd'], ['e', 'f', ['g', ['j', 'k']]]];
	
	function mergeToStringRecursive(array $array): string {
		$result = '';
		
		foreach ($array as $elem) {
			if (is_array($elem)) {
				$result .= mergeToStringRecursive($elem);
			} else {
				$result .= $elem;
			}
		}
		
		return $result;
	}
	
	echo "\nСклеенная строка: ";
	echo mergeToStringRecursive($data2);