<?php
	/*
	 * Loop and HTML Table Generation in PHP
	 */

	// ⊗ppPmSFLT
	
	/* ------------- №1 ------------- */
	$arr = [
		['name' => 'user1', 'age' => 30, 'salary' => 500],
		['name' => 'user2', 'age' => 31, 'salary' => 600],
		['name' => 'user3', 'age' => 32, 'salary' => 700],
	];
	
	echo '<table>' . PHP_EOL;
	foreach ($arr as $item) {
			echo '<tr>' . PHP_EOL;
				echo "<td>{$item['name']}</td>" . PHP_EOL;
				echo "<td>{$item['age']}</td>" . PHP_EOL;
				echo "<td>{$item['salary']}</td>" . PHP_EOL;
			echo '</tr>' . PHP_EOL;
	}
	echo '</table>' . PHP_EOL;
