<?php
	/*
	 * Вывод строки со вставкой в PHP
	 */

	// ⊗ppPmSFIP

	// №1
	$price = 19.99;
	printf('price: %.2f$', $price);
	echo PHP_EOL;
	
	// №2
	$name = "John";
	$age = 25;
	printf('Name: %s, Age: %d years', $name, $age);
	echo PHP_EOL;
	
	// №3
	$name = 'John';
	$score = 95;
	printf('student %s scored %d points', $name, $score);
	echo PHP_EOL;
	
	// №4
	$product = "Laptop";
	$price = 1299.99;
	$discount = 15;
	printf('Product: %s | Price: $%.2f |Discount: %d%%', $product, $price, $discount);
	echo PHP_EOL;
	
	// №5
	$x = 10;
	$y = 20;
	$z = 30;
	$sum = $x + $y + $z;
	printf('Sum: %d + %d + %d = %d', $x, $y, $z, $sum);
	echo PHP_EOL;
	
	// №6
	$day = 15;
	$month = "March";
	$year = 2023;
	printf('Date: %s %d, %d', $month, $day, $year);
	echo PHP_EOL;
	