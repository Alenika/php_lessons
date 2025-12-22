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


<h3>О себе</h3>
<?php
	$defaultPhrase = "Информация о пользователе пока не заполнена.";
	$bio = $_POST['bio'] ?? $defaultPhrase;
	$messageAboutMe = null;
	
	if (!empty($_POST['bio'])) {
		$bio = $_POST['bio'];
	} else {
		$bio = $defaultPhrase;
	}
	
	if (isset($_POST['bio']) && $_POST['bio'] !== $defaultPhrase && trim($_POST['bio']) !== '') {
		$messageAboutMe = "Информация о пользователе сохранена.";
	}
?>

<form action="" method="post">
	<label for="bio">Введите информацию о себе:</label><br>
	<textarea id="bio" name="bio" rows="5" cols="30"><?= $bio ?></textarea>
	<input type="submit" value="Отправить">
</form>

<?php if ($messageAboutMe) : ?>
	<p><?= $messageAboutMe ?></p>
<?php endif; ?>
