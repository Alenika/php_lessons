<?php
	/*
	 * Удаление файлов в PHP
	 * ⊗ppPmFSFRm
	 * 341 of 447
	 * №1
	 */

	$files = ['1.txt', '2.txt', '3.txt'];
	
	foreach ($files as $file) {
		unlink($file);
	}
