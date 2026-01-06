<?php
	/*
	 * Абсолютные пути в PHP
	 * ⊗ppPmFSAP
	 * 335 of 447
	 */

	$path = $_SERVER['DOCUMENT_ROOT'] . '/secret.txt';
	
	if (file_exists($path)) {
		echo file_get_contents($path);
	} else {
		echo "Файл не найден!" . $path;
	}