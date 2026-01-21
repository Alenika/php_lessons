<?php
    declare(strict_types=1);
    
	/**
	 * Введение в регулярные выражения в PHP
     * ⊗ppPmRgInr
     * 223 of 447
	 */
    
    // preg_replace($pattern, $replacement, $subject);
    // . — для одного любого символа (буквы, цифры, пробела, знака препинания)
    
    /* --- Задание №1 --- */
    // Шаблон: буква 'a', один любой символ (.), буква 'b'
	$str = 'ahb acb aeb aeeb adcb axeb';
 
	echo preg_replace('#a.b#', '!', $str);
    // Результат: ! ! ! aeeb adcb axeb
	
	echo '<br>' . PHP_EOL;
    
    /* --- Задание №2 --- */
    // Шаблон: буква 'a', два любых символа (..), буква 'b'
    
	echo preg_replace('#a..b#', '!', $str);
    // Результат: ahb acb aeb ! ! !
    
    /* --- Задание №3 --- */
    // Поиск по краям
    $str = 'aba acca azza a-a a+a a.a';
    
    echo preg_replace('#a.a#', '!', $str);
    
    echo '<br>' . PHP_EOL;
    
    /* --- Задание №4 --- */
    // Фиксированная длина
    $str = '123 1234 153 1563 173';
    
    echo preg_replace('#1.3#', 'order', $str);
    
    echo '<br>' . PHP_EOL;
    
    /* --- Задание №5 --- */
    // Пробелы — это тоже символы
    $str = 'a b a.b a+b abb';
    
    echo preg_replace('#a.b#', '!', $str);
    
    echo '<br>' . PHP_EOL;
    
    