<?php

/*
 * Нюансы использования чекбоксов в PHP
 */

// ⊗ppPmFmChcN
// 307 of 447

$message = null;

if (isset($_POST['age_check'])) {
	if ($_POST['age_check'] === '1') {
		$message = "Доступ на сайт разрешен";
	} else {
		$message = "Доступ запрещен (вам нет 18 лет)";
	}
}
?>

<form action="" method="post">
	<input type="hidden" name="age_check" value="0">
	<input id="age_check" type="checkbox" name="age_check" value="1" <?= (isset($_POST['age_check']) && $_POST['age_check'] === '1') ? 'checked' : '' ?>>
	<label for="age_check">Есть ли вам 18 лет?</label>
	<input type="submit" value="Отправить">
</form>

<?php if ($message): ?>
	<p><?= $message ?></p>
<?php endif; ?>
