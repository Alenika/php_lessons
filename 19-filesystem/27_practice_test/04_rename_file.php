<?php
	echo "<h3>Переименование файлов</h3>";
	
	$testDir = __DIR__ . '/file_manager_test/';
	$originalFile = $testDir . 'original.txt';
	file_put_contents($originalFile, "Это оригинальный файл для переименования");
	
	echo "<h3>Базовое переименование</h3>";
	$newFile = $testDir . 'renamed.txt';
	
	if (rename($originalFile, $newFile)) {
		echo "Файл успешно переименован<br>";
		echo "Было: $originalFile<br>";
		echo "Стало: $newFile<br>";
	}
	
	
