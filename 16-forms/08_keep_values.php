<?php
	/*
	 * Saving Form Values After Submission in PHP
	 */

	// ⊗ppPmFmVR
	
	/* ------------- №1 ------------- */
?>

<form action="" method="GET">
	<label for="city">Город:</label>
	<input id="city" type="text" name="city" value="
	<?php if (isset($_GET['city']))
			echo $_GET['city'] ?>">

	<label for="country">Страна:</label>
	<input id="country" type="text" name="country" value="
	<?php if (isset($_GET['country']))
		echo $_GET['country'] ?>">
	
	<input type="submit" value="Отправить">
</form>



	


