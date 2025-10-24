<?php
	/*
	 * Попадание даты в промежуток в PHP
	 */

	// ⊗ppPmTmIH
	
	/* ------------- №1 ------------- */
	$date = date('10-24');
	$zodiac = '';
	
	if (($date >= '12-22' && $date <= '12-31') OR ($date >= '01-01' && $date <= '01-19')) {
		$zodiac = 'Козерог';
	}
	elseif ($date >= '01-20' AND $date <= '02-18') {
		$zodiac = 'Водолей';
	}
	elseif ($date >= '02-19' AND $date <= '03-20') {
		$zodiac = 'Рыбы';
	}
	elseif ($date >= '03-21' AND $date <= '04-19') {
		$zodiac = 'Овен';
	}
	elseif ($date >= '04-20' AND $date <= '05-20') {
		$zodiac = 'Телец';
	}
	elseif ($date >= '05-21' AND $date <= '06-20') {
		$zodiac = 'Близнецы';
	}
	elseif ($date >= '06-21' AND $date <= '07-22') {
		$zodiac = 'Рак';
	}
	elseif ($date >= '07-23' AND $date <= '08-22') {
		$zodiac = 'Лев';
	}
	elseif ($date >= '08-23' AND $date <= '09-22') {
		$zodiac = 'Дева';
	}
	elseif ($date >= '09-23' AND $date <= '10-22') {
		$zodiac = 'Весы';
	}
	elseif ($date >= '10-23' AND $date <= '11-21') {
		$zodiac = 'Скорпион';
	}
	elseif ($date >= '11-22' && $date <= '12-21') {
		$zodiac = 'Стрелец';
	}
	
	echo $zodiac;
