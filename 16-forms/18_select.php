<?php
/*
 * Селекты в PHP
 */

// ⊗ppPmFmSl
// 311 of 447

?>

<h3>Выбор страны</h3>

<?php
	$message = null;
	
	if (isset($_POST['country'])) {
		$country = $_POST['country'];
		$message = "Вы живете в стране " . htmlspecialchars($country);
	}
?>

<form action="" method="post">
	<label for="country">Выберите вашу страну:</label>
	<select id="country" name="country">
		<option>Беларусь</option>
		<option>Россия</option>
		<option>Казахстан</option>
		<option>Узбекистан</option>
		<option>Армения</option>
	</select>
	
	<br><br>
	
	<input type="submit" value="Выбрать">
</form>

<?php if ($message): ?>
	<p><?= $message ?></p>
<?php endif; ?>

