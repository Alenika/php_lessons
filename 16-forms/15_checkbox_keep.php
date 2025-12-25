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
	echo print_r($_POST);
}
?>
