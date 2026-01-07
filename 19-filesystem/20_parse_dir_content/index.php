<?php
	/*
	 * Разбираем содержимое папки в PHP
	 * ⊗ppPmFSDPC
	 * 350 of 447
	 */

	// №1
	echo 'Задача №1<br>';
	$dir = 'dir';
	$files = array_diff(scandir($dir), ['..', '.']);
	
	foreach ($files as $file) {
		$path = $dir . '/' . $file;
		
		if (is_dir($path)) {
			echo $file . '<br>';
		}
	}
	echo '<br>';
	
	// №2
	echo 'Задача №2<br>';
	foreach ($files as $file) {
		$path = $dir . '/' . $file;
		
		if (is_file($path)) {
			echo $file . '<br>';
		}
	}
	echo '<br>';
	
	// №3
	echo 'Задача №3<br>';
	foreach ($files as $file) {
		$path = $dir . '/' . $file;
		
		if (is_file($path)) {
			$content = file_get_contents($path);
			file_put_contents($path, $content . time());
		}
	}