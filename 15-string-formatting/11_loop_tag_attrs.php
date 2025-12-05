<?php
	/*
	 * Loop and Generation of Tags and Attributes in PHP
	 */

	// ⊗ppPmSFLTAt
	
	/* ------------- №1 ------------- */
	$arr = [
		['href' => 'page1.html', 'text' => 'text1'],
		['href' => 'page2.html', 'text' => 'text2'],
		['href' => 'page3.html', 'text' => 'text3'],
	];
	
	echo '<ul>' . PHP_EOL;
	
	foreach ($arr as $elem) {
		echo "<li><a href=\"{$elem['href']}>{$elem['text']}\"</a></li>" . PHP_EOL;
	}
	
	echo '</ul>' . PHP_EOL;
	
	/* ------------- №2 ------------- */
	$arr = [
		['value' => '1', 'text' => 'text1'],
		['value' => '2', 'text' => 'text2'],
		['value' => '3', 'text' => 'text3'],
	];
	
	echo '<select>' . PHP_EOL;
	
	foreach ($arr as $item) {
		echo "<option value=\"{$item['value']}\">{$item['text']}</option></option>" . PHP_EOL;
	}
	
	echo '</select>' . PHP_EOL;