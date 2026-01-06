<?php
	/*
	 * Проверка существования файлов в PHP
	 * ⊗ppPmFSFOECh
	 * 343 of 447
	 */

	// №1
	if (file_exists('file1.txt')) {
		echo filesize('file1.txt') . "<br><br>";
	} else {
		echo "Файла не существует<br><br>";
	}
	
	// №2
	if (file_exists('file2.txt')) {
		echo "Файл создан и в него записан текст '!'<br><br>";
	} else {
		echo "Файл не существует <br><br>";
		file_put_contents('file2.txt', '!');
	}
	
	// №3
	if (file_exists('message.txt')) {
		echo file_get_contents('message.txt');
	} else {
		echo "Файла не существует<br><br>";
	}