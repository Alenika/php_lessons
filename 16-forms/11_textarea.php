<?php
	/*
	 * Элемент textarea в PHP
	 */
	
	/* ------------- №1 ------------- */
	
	// ⊗ppPmFmTx
	
	if (isset($_POST['review'])) {
		
		$reviewText = $_POST['review'];
		
		echo "Вы оставили следующий отзыв: $reviewText";
	}
?>

<form action="" method="POST">
	<textarea name="review"></textarea>
	<input type="submit">
</form>
