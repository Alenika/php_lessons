<?php
/*
 * Радиокнопки в PHP
 */

// ⊗ppPmFmRd
// 309 of 447

$result = null;

if (isset($_POST['gender'])) {
	$gender = $_POST['gender'];
	
	if ($gender === 'male') {
		$result = "Вы выбрали: мужской пол";
	} elseif ($gender === 'female') {
		$result = "Вы выбрали: женский пол";
	} else {
		$result = "Пол не выбран";
	}
}
?>

<form action="" method="post">
	<input type="hidden" name="gender" value="none">
	
	<p>Выберите ваш пол</p>
	
	<input type="radio" name="gender" id="male" value="male">
	<label for="male">Мужской</label>
	
	<br>
	
	<input type="radio" name="gender" id="female" value="female">
	<label for="female">Женский</label>
	
	<br><br>
	
	<input type="submit" value="Отправить">
</form>

<?php if ($result): ?>
	<p><?= $result ?></p>
<?php endif; ?>