<?php
	// ⊗ppPmBsVU - №1
	$num = 123;
	echo $num . '<br>' . '<br>';
	
	// ⊗ppPmBsVVCh - №1
	$a = 10;
	echo $a . '<br>';
	$a = 20;
	echo $a . '<br>' . '<br>';
	
	// ⊗ppPmBsMONu - №1
	$a = 1 + 2 + 3;
	echo $a . '<br>' . '<br>';
	
	// ⊗ppPmBsMOV - №1
	$a = 10;
	$b = 2;
	echo "Сумма = " . ($a + $b) . '<br>';
	echo "Разность = " . ($a - $b) . '<br>';
	echo "Произведение = " . ($a * $b) . '<br>';
	echo "Частное = " . ($a / $b) . '<br>' . '<br>';
	
	// ⊗ppPmBsMOV - №2
	$c = 10;
	$d = 5;
	$res = $c + $d;
	echo $res . '<br>' . '<br>';
	
	// ⊗ppPmBsMOV - №3
	$a = 1;
	// $b = 2; already equals the assigned value
	$c = 3;
	echo ($a + $b + $c) . '<br>' . '<br>';
	
	// ⊗ppPmBsMOV - №4
	$a = 10;
	$b = 5;
	$c = $a - $b;
	$d = 7;
	$res = $c + $d;
	echo $res . '<br>' . '<br>';
	
	// ⊗ppPmBsMOP - №1
	echo 20 . '<br>' . '<br>';
	
	// ⊗ppPmBsMOP - №2
	echo 23 . '<br>' . '<br>';
	
	// ⊗ppPmBsMOP - №3
	echo 6 . '<br>' . '<br>';
	
	// ⊗ppPmBsMOP - №4
	echo 9 . '<br>' .'<br>';
	
	// ⊗ppPmBsMOE - №1
	echo 8 . '<br>';
	
	// ⊗ppPmBsMOE - №2
	echo 8 . '<br>';
	
	// ⊗ppPmBsMOPa - №1
	echo 25 . '<br>';
	
	// ⊗ppPmBsMOPa - №2
	echo 13 . '<br>';
	
	// ⊗ppPmBsMOPa - №3
	echo 36 . '<br>';
	
	// ⊗ppPmBsMOPa - №4
	echo 4 . '<br>';
	
	//⊗ppPmBsMONua - №1
	echo 4 . '<br>';
	
	//⊗ppPmBsMONua - №2
	echo 4 . '<br>';
	
	//⊗ppPmBsFr - №1
	$a = 1.5;
	$b = 0.75;
	echo $a + $b . '<br>'; // 2.25

	// ⊗ppPmBsNN - №1
	$a = -100;
	echo $a . '<br>';
	
	// ⊗ppPmBsNN - №2
	$a = -150;
	echo -$a . '<br>'; // 150
	echo $a . '<br>'; // -150

	// ⊗ppPmBsDR - №1
	$a = 10;
	$b = 3;
	echo $a % $b . '<br>'; // 1

	// ⊗ppPmBsNP - №1
	echo 2 ** 10 . '<br>'; // 1024

	// ⊗ppPmBsNPP - №1
	echo 24 . '<br>';
	
	// ⊗ppPmBsNPP - №2
	echo 216 . '<br>';
	
	// ⊗ppPmBsNPP - №3
	echo 48 . '<br>';
	
	// ⊗ppPmBsNPP - №4
	echo 24 . '<br>';
	
	// ⊗ppPmBsNPP - №5
	echo 72 . '<br>';

	// ⊗ppPmBsSC - №1
	$str = 'hello';
	echo $str . '<br>';
	
	// ⊗ppPmBsSC - №2
	$str_1 = 'abc';
	$str_2 = 'def';
	echo $str_1 . $str_2 . '<br>';

	// ⊗ppPmBsSCS - №1
	$str_3 = 'hello';
	$str_4 = 'world';
	echo $str_3 . ' ' . $str_4 . '<br>';
	
	// ⊗ppPmBsSL - №1
	echo strlen($str_1) . '<br>'; // 3
	echo strlen($str_2) . '<br>'; // 3
	echo strlen($str_3) . '<br>'; // 5
	echo strlen($str_4) . '<br>'; // 5
	
	echo strlen('абвгд') . '<br>'; // выведет 10, а не 5
	echo mb_strlen('абвгд') . '<br>'; // 5

	// ⊗ppPmBsCyP - №1
	$str_5 = 'программа';
	echo strlen($str_5) . '<br>'; // 18
	echo mb_strlen($str_5) . '<br>'; // 9
	
	// ⊗ppPmBsTg - №1
	echo '<i>курсивный текст</i><br>';
	
	echo '<i>';
	echo 'курсивный';
	echo '</i>' . '<br>';
	
	$cursive_str = 'курсивный';
	$open = '<i>';
	$close = '</i>';
	echo $open . $cursive_str . $close . '<br>';
	
	// ⊗ppPmBsTg - №2
	echo 1 . '<br>';
	echo 2 . '<br>';
	echo 3 . '<br>';
	echo 4 . '<br>';
	echo 5 . '<br>';
	echo 6 . '<br>';
	echo 7 . '<br>';
	echo 8 . '<br>';
	echo 9 . '<br>';
	
	// ⊗ppPmBsTgA - №1-3
	echo '<img src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6d87zy2l97Gbuz1xheO71Fzw31vhLFurSyg&s" alt = "Cat"><br>';
	
	echo '<input type = "text" value = "Cat"><br>';
	
	echo '<textarea rows = "4" cols = "50">I like cats.</textarea><br>';
	
	// ⊗ppPmBsBV №1-2
	$is_animal = true;
	echo $is_animal . '<br>'; // 1
	
	$is_hungry = false;
	echo $is_hungry . '<br>'; // пустота
	var_dump($is_hungry); // bool(false)
	
	// ⊗ppPmBsNl №1-2
	$nothing = null;
	echo $nothing . '<br>'; // пустота
	var_dump($nothing); // NULL

	var_dump($nothing_1);
	// Warning: Undefined variable NULL

	// ⊗ppPmBsATC - №1
	echo '<br>';
	echo 6 . '<br>';

	// ⊗ppPmBsCTS - №1
	$a = 1;
	$b = 2;
	$c = 3;
	$str = $a . $b . $c;
	echo $str . '<br>'; // 123
	var_dump($str); // string(3) "123"
	
	// ⊗ppPmBsNTS - №1
	echo '<br>';
	echo 3.4; // 3.4
	echo '<br>';
	echo 3 . 4 . '<br>'; // 34

	// ⊗ppPmBsCTN - №1
	$test = '12345';
	var_dump($test); // string(5) "12345"
	echo '<br>';
	var_dump((int) $test); // int(12345)
	echo '<br>';
	
	// ⊗ppPmBsCTF - №1
	$test = '12.345';
	var_dump((float)$test); // float(12.345)

	// ⊗ppPmBsFTI - №1
	echo '<br>';
	var_dump((int)$test); // int(12)
	
	// ⊗ppPmBsNTS №1-2
	echo '<br>';
	$test = 12345;
	var_dump((string)$test); // string(5) "12345"
	
	$test = 12.345;
	echo '<br>';
	var_dump((string)$test); // string(6) "12.345"

	// ⊗ppPmBsSCh - №1
	echo '<br>';
	$str = 'abcde';
	echo $str[0] . '<br>'; // a
	echo $str[2] . '<br>'; // c
	echo $str[4] . '<br>'; // e
	
	// ⊗ppPmBsSCh - №2
	echo $str[-1] . '<br>';
	
	// ⊗ppPmBsSCh - №3
	$reversed_str = $str[4] . $str[3] . $str[2] . $str[1] . $str[0];
	echo $reversed_str . '<br>'; // edcba
	
	// ⊗ppPmBsSCh - №4
	$num = 3;
	echo $str[$num] . '<br>'; // d

	// ⊗ppPmBsDS - №1
	$str_6 = '12345';
	echo $str_6[0] + $str_6[1] + $str_6[2] + $str_6[3] + $str_6[4]; // 15
	echo '<br>';
	
	// ⊗ppPmBsND №1-3
	$num = 12345;
	$str_7 = (string) $num;
	echo $str_7[0] + $str_7[1] + $str_7[2] + $str_7[3] + $str_7[4]; // 15
	echo '<br>';
	echo $str_7[0] * $str_7[1] * $str_7[2] * $str_7[3] * $str_7[4]; // 120
	echo '<br>';
	echo $str_7_rev = $str_7[-1] . $str_7[-2] . $str_7[-3] . $str_7[-4] . $str_7[-5]; // 54321

	// ⊗ppPmBsAON №1-2
	echo '<br>';
	echo 3 . '<br>';
	
	echo 6 . '<br>';
	
	// ⊗ppPmBsShO №1
	$num = 47;
	$num += 7;
	$num -= 18;
	$num *= 10;
	$num /= 15;
	echo $num . '<br>'; // 24
	
	// ⊗ppPmBsShO №2
	$str = 'a';
	$str .= 'b';
	$str .= 'c';
	
	echo $str . '<br>'; // abc

	// ⊗ppPmBsIc №1
	$num = 10;
	$num++;
	$num++;
	$num--;
	echo $num . '<br>'; // 11

	// ⊗ppPmBsPPT - №1
	echo '<br>';
	echo 4;
	
	// ⊗ppPmBsPPT - №2
	echo '<br>';
	echo 3;
	
	// ⊗ppPmBsPPT - №3
	echo '<br>';
	echo 2;
	
	// ⊗ppPmBsPPT - №4
	echo '<br>';
	echo 3;
	
	// ⊗ppPmBsPPT - №5
	echo '<br>';
	echo $num1 = 4;
	echo '<br>';
	echo $num2 = 4;
	echo '<br>';
	
	// ⊗ppPmBsPPT - №6
	echo $num1 = 4;
	echo '<br>';
	echo $num2 = 3;
	echo '<br>';
	
	// ⊗ppPmBsPPT - №7
	echo '<br>';
	echo $num1 = 2;
	echo $num2 = 2;
	echo '<br>';
	
	// ⊗ppPmBsPPT - №8
	echo '<br>';
	echo $num1 = 2;
	echo $num2 = 3;
	echo '<br>';
	
	// ⊗ppPmBsPPT - №9
	echo '<br>';
	echo $num1 = 3;
	echo $num2 = 3;
	echo '<br>';
	
	// Поиск ошибок в коде

	// ⊗ppPmBsMst - №1
	$str = 'abc';
	echo $str[2]; // с
	
	// ⊗ppPmBsMst - №2
	$num1 = 1;
	$num2 = 2;
	$sum = $num1 + $num2;
	echo $sum; // 3
	
	// ⊗ppPmBsMst - №3
	$num = 123;
	$str_8 = (string)$num;
	echo $str_8[0]; // 1
	
	// ⊗ppPmBsMst - №4
	$str = 'abc def';
	echo $str[6]; // f
	
	// ⊗ppPmBsMst - №5
	$num1 = 1;
	$num2 = 2;
	$num3 = 3;
	
	echo $num1 + $num2 + $num3; // 6
	
	// ⊗ppPmBsMst - №6
	echo 1 . 2; // должно быть '12'
	
	// ⊗ppPmBsMst - №7
	$str = 'abc def';
	echo strlen($str); // выводит 7, пробел считается
	
	// ⊗ppPmBsMst - №8
	$a = 0;
	echo $a++; // 0, сначала прибавляется 1, затем присваивается переменной
	
	// ⊗ppPmBsMst - №9
	$num = 123;
	$str = (string)$num;
	echo $str[0] + $str[2]; // 4
	
	// ⊗ppPmBsMst - №10
	$str = 'abc';
	echo strlen($str); //3
	
	// ⊗ppPmBsMst - №11
	$a = 24 * 60 * 60;
	echo $a; // 86400

	// ⊗ppPmBsMst - №12
	echo 1.2 + 1.3; // 2.5
	
	// ⊗ppPmBsMst - №13
	$str = 'abc';
	echo strlen($str); // 3
	
	// ⊗ppPmBsMst - №14
	$num = 123;
	$num = (string)$num;
	echo $num[0] + $num[1] + $num[2]; // 6
	
	// ⊗ppPmBsMst - №15
	$a = 123;
	$b = 456;
	$s = $a + $b;
	
	echo $s; // 579
	
	// ⊗ppPmBsMst - №16
	$num1 = (int) '2.5'; // 2
	$num2 = (int) '3.5'; // 3
	echo $num1 + $num2; // целые числа integers, поэтому 2+3=5
	
	// ⊗ppPmBsMst - №17
	$aaa = 1;
	$bbb = 2;
	$ссс = 3;
	
	var_dump($aaa + $bbb + $ссс); // 5
	
