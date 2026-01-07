<?php
	/*
	 * Чтение содержимого папки в PHP
	 * ⊗ppPmFSDR
	 * 348 of 447
	 */

	// №1 №2
	$files = array_diff(scandir('dir'), ['..', '.']);
	
	foreach ($files as $file) {
		echo $file . '<br>';
		echo file_get_contents('dir/' . $file) . '<br><br>';
	}
	
	// №3
	$files = array_diff(scandir('dir'), ['..', '.']);
	
	foreach ($files as $file) {
		$path = 'dir2/' . $file;
		
		$content = file_get_contents($path);
		file_put_contents($path, $content . '!');
		echo file_get_contents($path) . '<br><br>';
	}