<?php
	$projectRoot = realpath(__DIR__ . '/../../');
	$file = $projectRoot . '/config.txt';
	
	if (file_exists($file)) {
		echo "Файл найден: " . trim(file_get_contents($file));
	} else {
		echo "Файл не найден! " . $file;
	}
	
	
	
	
