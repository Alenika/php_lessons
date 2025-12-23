<?php
/*
 * Чекбокс в PHP
 */

// ⊗ppPmFmChc
// 306 of 447

/* --- №1 Приветствие --- */
$message = null;
$name = $_POST['name'] ?? 'Гость';

if (!empty($_POST['send_name'])) {
	
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
	<input type="submit" name="send_name" value="Отправить">
</form>

<?php if ($message) : ?>
	<p><?= $message ?></p>
<?php endif; ?>


<?php
/* --- №2 Анкета подписчика --- */
$emailRaw = $_POST['email'] ?? '';
$emailDisplay = (trim($emailRaw) !== '') ? $emailRaw : 'не указан';
$isSubscribed = isset($_POST['subscribe']) ? 'checked' : '';
$messageEmail = null;

if (isset($_POST['send_subscribe'])) {
	if (isset($_POST['subscribe'])) {
		$messageEmail = "На почту " . htmlspecialchars($emailDisplay) . " будет отправлено письмо";
	} else {
		$messageEmail = "Вы отказались от подписки для " . htmlspecialchars($emailDisplay);
	}
}
?>

<hr> <h3>Анкета подписчика</h3>
<form action="" method="post">
	<label for="email">Ваш Email:</label>
	<input id="email" type="text" name="email" value="<?= htmlspecialchars($emailRaw) ?>">
	<br><br>
	<input type="checkbox" name="subscribe" <?= $isSubscribed ?>>
	<label>Я согласен получать рассылку</label>
	<br><br>
	<input type="submit" name="send_subscribe" value="Подписаться">
</form>

<?php if ($messageEmail): ?>
	<p><?= $messageEmail ?></p>
<?php endif; ?>