<?php
	/*
	 * Особенности кириллицы в регулярках PHP
	 */

	// ⊗ppPmRgCF
	
	/* ------------- №1 ------------- */
	$str = 'wйw wяw wёw wqw';
	$res = preg_replace('#w[а-яё]w#u', '!', $str);
	echo $res . PHP_EOL;
	
	/* ------------- №2 ------------- */
	$str = 'ааа ббб ёёё ззз ййй ААА БББ ЁЁЁ ЗЗЗ ЙЙЙ';
	$res = preg_replace('#[а-яёA-ЯЁ]#u', '!', $str);
	echo $res . PHP_EOL;