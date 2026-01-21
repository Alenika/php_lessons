<?php
    declare(strict_types=1);
    
	/**
	 * Операторы повторения символов в регулярках
     * ⊗ppPmRgRO
     * 224 of 447
	 */
    
    // «хотя бы один» (+), «ноль или больше» (*) и «ноль или один» (?)
	
	$str = 'aa aba abba abbba abca abea';
    
    // №1: + (один или более раз)
	$res_1 = preg_replace('#ab+a#', '!', $str); // буква 'b' один или более раз (+)
	echo "№1: " . $res_1 . PHP_EOL; // aa ! ! ! abca abea
    
    // №2: * (ноль или более раз)
	$res_2 = preg_replace('#ab*a#', '!', $str);
	echo "№2: " . $res_2 . PHP_EOL; // ! ! ! ! abca abea
    
    // №3: ? (ноль или один раз)
	$res_3 = preg_replace("#ab?a#", '!', $str);
	echo $res_3 . PHP_EOL; // ! ! abba abbba abca abea
    
    // №4: * (ноль или более раз)
	$res_4 = preg_replace('#ab*a#', '!', $str);
	echo "№4: " . $res_4 . PHP_EOL; //  ! ! ! ! abca abea
	
	/* ------------- №5 ------------- */
	$str_5 = 'a.b a_b a-b a$b';
	$res_5 = preg_replace('#a.b#', '!', $str_5);
	echo "№5: " . $res_5 . PHP_EOL;
    
    // №6: xa+ (x и хотя бы одна 'a')
	$str_6 = 'ax x xa xaa xaaa';
	$res_6 = preg_replace('#xa+#', '!', $str_6);
	echo "№6: " . $res_6 . PHP_EOL;
    
    // №7: xa* (x и любое количество 'a', даже ноль)
	$str_7 = 'ax x xa xaa xaaa';
	$res_7 = preg_replace('#xa*#', '!', $str_7);
	echo "№7: " . $res_7 . PHP_EOL;
    
    // №8: xa?x (x, возможная 'a', и снова x)
	$str_8 = 'x xax xaax xaaax xbx';
	$res_8 = preg_replace('#xa?x#', '!', $str_8);
	echo "№8: " . $res_8 . PHP_EOL;
    
    /**
     * Практика квантификаторов: +, *, ?
     * date: 21.01.2026
     */
    
    // №9: Хотя бы одна 'b'
    $str_9 = 'ab bba abbba abbbba a bba';
    $res_9 = preg_replace('#ab+ #', '!', $str_9);
    echo "№9: " . $res_9 . PHP_EOL;
    
    // №10: Жадная точка (от 'a' до 'e')
    $str_10 = 'abc dbe afg';
    $res_10 = preg_replace('#a.*e#', '!', $str_10);
    echo "№10: " . $res_10 . PHP_EOL;
    
    // №11: Опциональный префикс: 's' в протоколе
    $str_11 = 'http://site.ru https://site.ru site.ru';
    $res_11 = preg_replace('#https?://#', '!', $str_11);
    echo "№11: " . $res_11 . PHP_EOL;
    
    // №12: Очистка лишних букв
    $str_12 = 'java jvaa javvvva jav';
	$res_12 = preg_replace('#java*#', '!', $str_12);
    echo "№12: " . $res_12 . PHP_EOL;
    
    // №13: Поиск цен
    $str_13 = '10$ 100$ 1000$ 10000$';
    $res_13 = preg_replace('#100+\$#', '!', $str_13);
    echo "№13: " . $res_13 . PHP_EOL;
    