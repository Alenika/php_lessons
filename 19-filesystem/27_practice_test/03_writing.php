<?php
	echo "<h3>Запись файлов</h3>";
	
	$filePath = __DIR__ . '/file_manager_test/test.txt';
	
	// 1. Запись всего файла (перезапись)
	$content = "Это первая строка.\nЭто вторая строка.\nЭто третья строка.";
	
	if (file_exists($filePath)) {
		echo "<p>Файл НАЙДЕН!</p>";
		file_put_contents($filePath, $content); // !!! возвращает кол-во записанных байт
		echo file_get_contents($filePath) . "<br>";
	} else {
		echo "<p style='color: #a40000'>Файл НЕ НАЙДЕН!</p>";
	}
	
	// Дозапись в конец файла
	$additionalContent = "\nЭто четвертая строка";
	file_put_contents($filePath, $additionalContent, FILE_APPEND);
	echo file_get_contents($filePath);
	
	
