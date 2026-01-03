<?php
	session_start();
	
	$sum = $_SESSION['number1'] + $_SESSION['number2'];
	echo "Сумма чисел из сессии: " . $sum;