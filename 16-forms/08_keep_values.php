<?php
	/*
	 * Saving Form Values After Submission in PHP
	 */

	// ⊗ppPmFmVR
	
	/* ------------- №1 ------------- */
?>

<form action = "" method = "GET">
	<input name = "city" value = "
	<?php if (isset($_GET['city']))
			echo $_GET['city'] ?>">

	<input name = "country" value = "
	<?php if (isset($_GET['country']))
		echo $_GET['country'] ?>">
	
	<input type = "submit">
</form>

<?php
	echo $_GET['city'] . ' ' . $_GET['country'];
	


