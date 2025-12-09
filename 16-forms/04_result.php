<?php
	// ⊗ppPmFmDGEG
	
	/* ------------- №1 ------------- */
	
	if (isset($_GET['number1'])) {
		$num1 = (float)$_GET['number1'];
		$num2 = (float)$_GET['number2'];
		$num3 = (float)$_GET['number3'];
		
		$sum = $num1 + $num2 +$num3;
		
		echo "Сумма введенных чисел: " . $sum;
	} else {
		echo "Числа не заполнены.";
	}