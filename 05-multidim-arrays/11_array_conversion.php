<?php
	/*
	 * Конвертация многомерных массивов в PHP
	 */

	// ⊗ppPmMdCn

	// №1
	
	$arr = [
		[
			'country' => 'country1',
			'city' =>    'city1',
		],
		[
			'country' => 'country2',
			'city' =>    'city2',
		],
		[
			'country' => 'country1',
			'city' =>    'city3',
		],
		[
			'country' => 'country1',
			'city' =>    'city4',
		],
		[
			'country' => 'country3',
			'city' =>    'city5',
		],
		[
			'country' => 'country2',
			'city' =>    'city6',
		],
		[
			'country' => 'country3',
			'city' =>    'city7',
		],
	];
	
	$res = [];
	
	foreach ($arr as $elem) {
		$country = $elem['country'];
		$city = $elem['city'];
		$res[$country][] = $city; // просто список городов
		
		// $res[$country][$city] = $city; город становился ключом
	}
	
	echo '<pre>';
	var_dump($res);
	echo '<pre>';

	// №2

	$arr = [
		[
			'date'  => '2019-12-29',
			'event' => 'name1'
		],
		[
			'date'  => '2019-12-31',
			'event' => 'name2'
		],
		[
			'date'  => '2019-12-29',
			'event' => 'name3'
		],
		[
			'date'  => '2019-12-30',
			'event' => 'name4'
		],
		[
			'date'  => '2019-12-29',
			'event' => 'name5'
		],
		[
			'date'  => '2019-12-31',
			'event' => 'name6'
		],
		[
			'date'  => '2019-12-29',
			'event' => 'name7'
		],
		[
			'date'  => '2019-12-30',
			'event' => 'name8'
		],
		[
			'date'  => '2019-12-30',
			'event' => 'name9'
		],
	];
	
	$res = [];
	
	foreach ($arr as $elem) {
		$res[$elem['date']][] = $elem['event'];
	}
	
	echo '<pre>';
	var_dump($res);
	echo '<pre>';
	
	// №3

	$arr = [
		'2019-12-29'=> ['name1', 'name2', 'name3',
			'name4'],
		'2019-12-30'=> ['name5', 'name6',
			'name7'],
		'2019-12-31'=> ['name8', 'name9'],
	];
	
	$res = [];
	
	foreach ($arr as $date => $events) {
		foreach ($events as $event) {
			$res[] = [
				'date' => $date,
				'event' => $event,
			];
		}
	}
	
	echo '<pre>';
	var_dump($res);
	echo '<pre>';