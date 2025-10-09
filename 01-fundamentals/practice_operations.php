<?php
	// ⊗ppPmBsPrmO №1
	$secInMin = 60;
	$minInHour = 60;
	$hoursInDay = 24;
	
	$secInDay = $hoursInDay * $minInHour * $secInMin;
	echo "Количество секунд в сутках = " . $secInDay . '<br>'; // 86400
	
	// ⊗ppPmBsPrmO №2
	$secIn30Days = 30 * $secInDay;
	echo "Количество секунд в 30 сутках = " . $secIn30Days . '<br>'; // 2592000
	
	// ⊗ppPmBsPrmO №3
	$daysInYear = 365;
	$secInYear = $daysInYear * $secInDay;
	echo "Количество секунд в году = " . $secInYear . '<br>'; // 31536000
	
	// ⊗ppPmBsPrmO №4
	$minInDay = $hoursInDay * $minInHour;
	echo "Количество минут в сутках = " . $minInDay . '<br>'; // 1440
	
	// ⊗ppPmBsPrmO №5
	$minInYear = $daysInYear * $minInDay;
	echo "Количество минут в году = " . $minInYear . '<br>'; // 525600
	
	// ⊗ppPmBsPrmO №6
    $KB = 1024;
	$MB = $KB * 1024;
	echo "Количество байт в мегабайте = " . $MB . '<br>'; // 1048576
	
	// ⊗ppPmBsPrmO №7
	$GB = $MB * 1024;
	echo "Количество байт в гигабайте = " . $GB . '<br>'; // 1073741824
	
	// ⊗ppPmBsPrmO №8
	$TB = $GB * 1024;
	$bytesIn10GB = 10 * $GB;
	echo "Количество байт в 10 гигабайтах = " . $bytesIn10GB . '<br>'; // 10737418240
	
	// ⊗ppPmBsPrmO №9
	echo "Количество байт в терабайте = " . $TB . '<br>'; // 1099511627776
	
	// ⊗ppPmBsPrmO №10
	$KBinTB = $TB / $KB;
	echo "Количество килобайт в терабайте = " . $KBinTB . '<br>'; // 1073741824
