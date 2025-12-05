<?php
	/*
	 * Loop and Tag Generation from Arrays in PHP
	 */

	// ⊗ppPmSFLTAr
	
	/* ------------- №1 ------------- */
	$arr = ['text1', 'text2', 'text3'];
	
	echo '<select>' . PHP_EOL;
	foreach ($arr as $element) {
		echo "<option>$element</option>" . PHP_EOL;
	}
	echo '</select>' . PHP_EOL;
