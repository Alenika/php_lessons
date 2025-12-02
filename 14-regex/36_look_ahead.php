<?php
	/*
	 * Просмотр вперед в регулярках PHP (Lookaheads)
	 * Позитивный просмотр вперед - (?= )
	 * негативный просмотр вперед - (?!)
	 */

	// ⊗ppPmRgVA
	
	/* ------------- №1 ------------- */
	$str = 'func1() func2() func3()';
	
	$reg = '#(\w+)(?=\(\))#';
	
	preg_match_all($reg, $str, $res);
	
	print_r($res);
	
	/* ------------- №2 ------------- */
	$str = '<a href="" class="eee" id="zzz">';
	
	$reg = '#\s(\w+)(?==".*?")#';
	
	preg_match_all($reg, $str, $res);
	
	print_r($res);
	
	

