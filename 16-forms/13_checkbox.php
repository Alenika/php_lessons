<?php
/*
 * Чекбокс в PHP
 */

// ⊗ppPmFmChc
// 306 of 447

/* ------------- №1 ------------- */
$message = null;
$name = $_POST['name'] ?? 'Гость';

if (!empty($_POST)) {
	
	$displayName = (trim($_POST['name']) !== '') ? $_POST['name'] : 'Гость';
	if (isset($_POST['flag'])) {
		$message = "Привет, $displayName";
	} else {
		$message = "Пока, $displayName";
	}
}
?>

<h3>Приветствие</h3>

<form action="" method="post">
	<label for="name">Введите свое имя:</label>
	<input id="name" type="text" name="name" value="<?= $name ?>">
	<input type="checkbox" name="flag">
	<input type="submit" value="Отправить">
</form>

<?php if ($message) : ?>
	<p><?= $message ?></p>
<?php endif; ?>

