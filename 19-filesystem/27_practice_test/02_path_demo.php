<?php
	echo "<h3>Демонстрация путей</h3>";
	
	echo "1. Текущая рабочая директория (getcwd):<br>";
	echo getcwd() . "<br><br>";
	
	echo "2. Директория файла (__DIR__):<br>";
	echo __DIR__ . "<br><br>";
	
	echo "3. Разные пути к одному файлу:<br>";
	$file = 'test.txt';
	
	// Относительный путь (не сработал!)
	echo "Относительный: '$file'<br>";
	if (file_exists('text.txt')) {
		echo "Файл найден!" . realpath($file) . "<br>";
	} else {
		echo "<p style='color: #a40000'>Файл не найден!</p>";
	}
	
	// Абсолютный путь
	$absolute = __DIR__ . '/file_manager_test/test.txt';
	echo "<p>Абослютный: '$absolute'</p>";
	
	if (file_exists($absolute)) {
		echo "Файл найден!<br>";
	} else {
		echo "<p style='color: #a40000'>Файл не найден!</p>";
	}
	
	

