<?php
/*
 * Элемент textarea в PHP
 */

/* ------------- №1 ------------- */

// ⊗ppPmFmTx
$feedback = $_POST['feedback'] ?? '';
$message = null;

if (isset($_POST['feedback'])) {
	
	$feedback = $_POST['feedback'];
	$message = "Ваш отзыв: " . $feedback;
}
?>

<h3>Форма отзыва</h3>
<form action="" method="POST">
	<label for="feedback">Оставьте ваш отзыв:</label><br>
	<textarea id="feedback" name="feedback" rows="5" cols="30" <?= $feedback ?>></textarea>
	<input type="submit" value="Отправить отзыв">
</form>

<?php if ($message) : ?>
	<p><?= $message ?></p>
<?php endif; ?>
