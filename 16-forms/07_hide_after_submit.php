<?php
	/*
	 * Hiding the Form After Submission in PHP
	 */
	
	// ⊗ppPmFmHAS
	
	/* ------------- №1 ------------- */

	if (empty($_GET)) {
?>

<form action = "" method = "GET">
	<input type = "text" name = "name" placeholder = "Ваше имя?">
	<input type = "submit" value = "Отправить">
</form>

<?php
	} else {
		echo $_GET['name'];
	}