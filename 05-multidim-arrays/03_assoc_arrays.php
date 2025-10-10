<?php
	/*
	 * Ассоциативные массивы в PHP
	 */

	// ⊗ppPmMdAs
	
	/* ---------- №1 ---------- */

	$arr = [
		'boys'=>[
			1=>'John',
			2=>'Jack',
			3=>'Ryan'
		],
		'girls'=>[
			1=>'Emma',
			2=>'Lily',
			3=>'Anna'
		],
	];
	
	echo $arr['boys'][1]; // John
	echo $arr['girls'][2]; // Lily
	
	
	/* ---------- №2 ---------- */
	$arr = [
		'ru'=>['пн', 'вт', 'ср', 'чт',
			'пт', 'сб', 'вс'],
		'en'=>['mn', 'ts', 'wd', 'th',
			'fr', 'st', 'sn'],
	];
	
	echo $arr['en'][2]; // wd
