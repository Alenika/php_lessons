<?php
	/*
	 * Generating an HTML Table Using a Single Loop in PHP
	 */

	// ⊗ppPmSFSLT
	
	/* ------------- №1 ------------- */
	echo '<table>';
	foreach ($arr as $user) {
		echo '<tr>';
		
		echo "<td>{$user['name']}</td>";
		echo "<td>{$user['age']} years</td>";
		echo "<td>{$user['salary']} dollars</td>";
		
		echo '</tr>';
	}
	echo '</table>';