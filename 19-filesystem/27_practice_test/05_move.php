<?php
	echo "<h3>Перемещение файлов</h3>";
	
	$testDir = __DIR__ . '/file_manager_test';
	
	$dir1 = $testDir . '/dir1/';
	$dir2 = $testDir . '/dir2/';
	$dir3 = $testDir . '/dir3/';
	
	foreach ([$dir1, $dir2, $dir3] as $dir) {
		if (!is_dir($dir)) {
			if (mkdir($dir, 0777, true)) {
				echo "Успешно создано: " . basename($dir) . "<br>";
			}
		} else {
			echo "Папка " . basename($dir) . " уже существует.<br>";
		}
	}
	
	echo "<h3>Перемещение файла между папками</h3>";
	
	$sourceFile = $dir1 . 'document.txt';
	file_put_contents($sourceFile, 'Этот файл будет перемещен');
	
	$destFile = $dir2 . 'document_moved.txt';
	
	if (rename($sourceFile, $destFile)) {
		echo "<p>Файл перемещен:</p>";
		
		echo "Содержимое после перемещения: " . file_get_contents($destFile);
	}
