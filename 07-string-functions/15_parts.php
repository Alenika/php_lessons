<?php
	/*
	 * Части строк в PHP
	 */

	// ⊗ppPmSFPr
	
	// №1
	$str = 'ab-cd-ef';
	echo strchr($str, '-') . PHP_EOL;
	
	// №2
	echo strrchr($str, '-') . PHP_EOL;
	
	// №3
	echo strstr($str, '--') . PHP_EOL;
	
	// №4
	$str = 'программирование-на-php';
	echo mb_strrchr($str, '-') . PHP_EOL;
	
	// №5
	$str = 'Привет-Мир-Пока';
	echo mb_strrchr($str, 'мир') . PHP_EOL;
	
	// №6
	$str = 'Функции-для-работы-со-строками';
	echo mb_strstr($str, 'работы') . PHP_EOL;
	
	// №7
	$str = 'ппп ррр ссс ттт ууу';
	echo mb_strstr($str, 'PPP') . PHP_EOL;
	
	// №8
	$str = 'Тестирование-многобайтовых-функций';
	echo mb_strrchr($str, '-') . PHP_EOL;
	
	// №9
	$str = 'Пример-Поиска-Подстроки-В-Тексте';
	echo mb_strrichr($str, 'тексте');