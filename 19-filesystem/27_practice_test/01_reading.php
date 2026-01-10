<?php
	// Чтение файлов
	echo "<h4>Чтение файлов</h4>";
	
	$filePath = 'file_manager_test/test.txt'; // относительный путь
	
	if (file_exists($filePath)) {
		echo "<p>Файл существует.</p>";
		
		$content = file_get_contents($filePath);
		echo "<h3>Содержимое файла:</h3>";
		echo "<pre>" . htmlspecialchars($content) . "</pre>";
		
		$fileSize = filesize($filePath);
		echo "<p>Размер файла: $fileSize байт</p>";
		
		$lastModified = date('d-m-Y H:i:s', filemtime($filePath));
		echo "<p>Последнее изменение: $lastModified</p>";
	} else {
		echo "<p style='color: #a40000'>Ошибка: файл не найден по пути $filePath</p>";
	}