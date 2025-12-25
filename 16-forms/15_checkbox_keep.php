<?php
/*
 * Сохранение выбранного значения в чекбоксе после отправки в PHP
 */

// ⊗ppPmFmChcSV
// 308 of 447

?>

<form action="" method="post">
	<input type="hidden" name="check1" value="0">
	<input type="checkbox" name="check1" id="c1" value="1"
		<?php if (!empty($_POST['check1'])) echo 'checked'; ?>>
	<label for="c1">Чекбокс 1</label>
	
	<input type="hidden" name="check2" value="0">
	<input id="c2" type="checkbox" name="check2" value="1"
		<?php if (!empty($_POST['check2'])) echo 'checked'; ?>>
	<label for="c2">Чекбокс 2</label>

	<input type="hidden" name="check3" value="0">
	<input type="checkbox" name="check3" id="c3" value="1"
		<?php if (!empty($_POST['check3'])) echo 'checked'; ?>>
	<label for="c3">Чекбокс 3</label>
	
	<input type="submit">
</form>

<?php
if (!empty($_POST)) {
	echo "<pre>";
	echo print_r($_POST);
	echo "</pre>";
}
?>

<hr>
<h3>Настройка профиля</h3>

<form action="" method="post">
	<div>
		<input type="hidden" name="sale" value="0">
		<input id="sale" type="checkbox" name="sale" value="1"
		<?php if (!empty($_POST['sale'])) echo 'checked'; ?>>
		<label for="sale">Уведомления о скидках</label>
	</div>
	<br>
	<div>
		<input type="hidden" name="blog" value="0">
		<input id="blog" type="checkbox" name="blog" value="1"
		<?php if (!empty($_POST['blog'])) echo 'checked' ?>>
		<label for="blog">Новые статьи в блоге</label>
	</div>
	<br>
	<div>
		<input type="hidden" name="messages" value="0">
		<input id="messages" type="checkbox" name="messages" value="1"
		<?php if (!empty($_POST['messages'])) echo 'checked' ?>>
		<label for="messages">Личные сообщения</label>
	</div>
	<br>
	<div>
		<input type="submit" name="save_settings" value="Отправить">
	</div>
</form>

<?php if (isset($_POST['save_settings'])): ?>
	<div>
		<?php echo "Настройки обновлены!"; ?>
	</div>
<?php endif; ?>
