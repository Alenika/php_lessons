<?php
	/*
	 * Абсолютные пути к папке и файлу скрипта в PHP
	 * ⊗ppPmFSSAP
	 * 337 of 447
	 * Задача №2
	 */

	$path = __DIR__ . '/../../../dir1/dir2/dir3/test.txt';
	echo file_get_contents($path);