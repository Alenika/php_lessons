<?php
	session_start();
	
	echo "<ul>";
	
	foreach ($_SESSION['userData'] as $key => $value) {
		echo "<li>$key - $value</li>";
	}
	echo "</ul>";
	
