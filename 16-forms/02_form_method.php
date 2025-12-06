<?php
	/*
	 * Form Submission Method in PHP
	 */

	// ⊗ppPmFmFSM
	
	/* ------------- №1 ------------- */
	// array(2) { ["test1"]=> string(1) "1" ["test2"]=> string(1) "2" }
	// array(0) { }
	// http://localhost:8000/02_result.php?test1=1&test2=2
	// Данные видны в адресной строке
	
	// array(0) { }
	// array(2) { ["test1"]=> string(1) "1" ["test2"]=> string(1) "2" }
	// http://localhost:8000/02_result.php
	// Данные идут «внутри» запроса, в адресе их не видно
	
?>

	<form action = "/02_result.php" method = "GET">
		<input type="text" name="test1" placeholder="Test 1">
		<input type="text" name = "test2" placeholder="Test 2">
		<input type="submit" value="Отправить (GET)">
	</form>

	<form action = "/02_result.php" method = "POST">
		<input type="text" name="test1" placeholder="Test 1">
		<input type="text" name = "test2" placeholder="Test 2">
		<input type="submit" value="Отправить (POST)">
	</form>
