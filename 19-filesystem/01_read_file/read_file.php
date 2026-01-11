<?php
	/*
	 * Чтение файлов в PHP
	 * ⊗ppPmFSFRe
	 * 331 of 447
	 */
	
	echo "<h3>Сумма чисел из файлов:</h3>";
	
	$files = ['1.txt', '2.txt'];
	$sum = 0;
	
	foreach ($files as $file) {
		if (!file_exists($file)) {
			echo "<p>Файл $file не найден!</p>";
			continue; // пропускаем
		}
		echo "<p>Файл $file найден.</p>";
		$content = file_get_contents(($file));
		$content = trim($content);
		$sum += $content;
	}
	echo "<hr>";
	echo "Cумма чисел в этих файлах: $sum";
	
	
	echo "<h3>Файл содержит не только число</h3>";
	
	$content = file_get_contents('3.txt');
	
	preg_match_all('/\d+/', $content, $matches);
	
	if (!empty($matches)) {
		$number = (int)$matches[0];
		echo $number;
	}
	
	echo "<h3>В файле несколько чисел</h3>";
	
	$content = file_get_contents('4.txt');
	$numbers = explode(' ', $content);
	$sum = array_sum(array_map('intval', $numbers));
	echo "<p>Сумма чисел: $sum</p>";
	
	