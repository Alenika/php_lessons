<?php
	/*
	 * Form Processing in a Single PHP File
	 */

	// ⊗ppPmFmOFH
	
?>

	/* ------------- №1 ------------- */
	<form action="" method="POST">
	<input name="surname">
	<input name="name">
	<input name="middle">
	<input type="submit">
	</form>
	
<?php
	if (isset($_POST['surname'])) {
		$surname = $_POST['surname'];
		$name = $_POST['name'];
		$middle = $_POST['middle'];
		
		echo $surname . " " . $name . " " . $middle;
	}
?>
