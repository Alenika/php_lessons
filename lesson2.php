<?php
	// Строки
	$name = "Alena";
	$greeting = "Hello, $name!";
	
	// Числа
	$age = 25;
	$height = 1.75;
	
	// Арифметические операции
	$years_left = 100 - $age;
	$height_in_cm = $height * 100;
	
	// Логические операции
	$is_adult = $age >= 18;
	$is_tall = $height > 1.80;
	
	//Вывод
	echo $greeting . "<br>";
	echo "Age: $age, Height: $height meters <br>";
	echo "You have $years_left years left to live until 100. <br>";
	echo "In cm: $height_in_cm cm <br>";
	echo "Is adult? " . ($is_adult ? "Yes" : "No") . "<br>";
	echo "Is tall?" . ($is_tall ? "Yes" : "No") . "<br>";
	?>