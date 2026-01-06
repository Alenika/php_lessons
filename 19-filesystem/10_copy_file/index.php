<?php
	/*
	 * Копирование файлов в PHP
	 * ⊗ppPmFSFC
	 * 340 of 447
	 * №1
	 */

	for ($i = 1; $i <= 5; $i++) {
		copy('file.txt', 'copy/' . $i . '.txt');
	}
