<?php
	/*
	 * Именованные карманы внутри регулярки PHP
	 */

	// ⊗ppPmRgENP
	
	/* ------------- №1 ------------- */
	$str = '12:59:59 12:59:12 09:45:09';
	
	$reg = '#(?P<hour>\d{2}):\d{2}:(?P=hour)#';
	
	preg_match_all($reg, $str, $res);
	
	var_dump($res[0]); // string(8) "12:59:12"  string(8) "09:45:09"
	

	// три синтаксиса — (?P=name) -> Python Syntax, \k'name' -> Perl Syntax (одинарные кавычки), и \k{name} -> Perl Syntax (фигурные скобки)
	
	/* ------------- №2 ------------- */
	// Найти одинаковые теги
	
	$str = '<b>текст</b> <p>параграф</p> <i>не закрыт';
	
	$reg = '#<(?P<tag>[a-z]+)>.*?</(?P=tag)>#';
	
	preg_match_all($reg, $str, $res);
	
	var_dump($res[0]);
	
	/* ------------- №3 ------------- */
	// Зеркальные числа (Использование \k'name')
	
	$str = '123 454 678 909';
	
	$reg = '#(?P<first>\d)\d\k\'first\'#';
	
	preg_match_all($reg, $str, $res);
	
	var_dump($res[0]);
	
	/* ------------- №4 ------------- */
	// Повторение разделителя (использование \k{name})
	
	$str = '1:2: 3-4- 5*6! 7#8#';
	
	$reg = '#\d(?P<sep>[^0-9a-z])\d\k{sep}#';
	
	preg_match_all($reg, $str, $res);
	
	var_dump($res[0]);
	
	/* ------------- №5 ------------- */
	$str = '100% 50% 20/20 15/10 80% 4/4';
	// Найти все дроби, у которых числитель совпадает со знаменателем

	$reg = '#(?P<numerator>\d+)/(?P=numerator)#';
	
	preg_match_all($reg, $str, $res);
	
	var_dump($res[0]);
	
	/* ------------- №5 ------------- */
	// Найти в строке два одинаковых слова, которые разделены запятой и пробелом
	
	$str = 'Мама, мыла раму. И папа, папа пришел.';
	
	// \w+ для захвата слова
	// модификатор u в конец
	
	$reg = '#(?P<word>\w+),\s(?P=word)#u';
	
	preg_match_all($reg, $str, $res);
	
	var_dump($res[0]);
	
	/* ------------- №6 ------------- */
	//	 Найдите все слова, которые начинаются и заканчиваются одинаковой подстрокой (start, end, test или любой другой последовательностью букв).
	
	$str = 'start_end_end start_middle_end test_test_test another_start_another';
	
	$reg = '#\b(?P<bound>[a-z]+)_(.*?)_(?P=bound)\b#';
	$res = [];
	
	preg_match_all($reg, $str, $res);
	
	var_dump($res[0]);