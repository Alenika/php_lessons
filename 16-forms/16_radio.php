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

<hr>
<h3>Регистрация на митап</h3>

<?php
	$message = null;
	
	if (!empty($_POST)) {
		if (!empty($_POST['name'])) {
			$name = $_POST['name'];
			$level = $_POST['level'];
			$mailing = $_POST['mailing'] ? "подписан" : "не подписан";
			
			$message = "Привет, $name! Твой уровень $level успешно зарегистрирован. На рассылку $mailing";
		} else {
			$message = "Введите имя";
		}
	}
	
?>

<form action="" method="post">
	<label for="name">Введите имя:</label>
	<input id="name" type="text" name="name" value="<?= htmlspecialchars($_POST['name']) ?? '' ?>">
	
	<br><br>
	
	<input type="hidden" name="level" value="none">

	<input id="junior" type="radio" name="level" value="junior"
	<?php if (($_POST['level'] ?? 'junior') === 'junior') echo 'checked'; ?>>
	<label for="junior">Junior</label>
	<br>
	<input id="middle" type="radio" name="level" value="middle"
	<?php if (($_POST['level'] ?? '') === 'middle') echo 'checked'; ?>>
	<label for="middle">Middle</label>
	<br>
	<input id="senior" type="radio" name="level" value="senior"
	<?php if (($_POST['level'] ?? '') === 'senior') echo 'checked'; ?>>
	<label for="senior">Senior</label>
	
	<br><br>
	
	<input type="hidden" name="mailing" value="0">
	<input id="mailing" type="checkbox" name="mailing" value="1"
	<?php if (!empty($_POST['mailing'])) echo 'checked' ?>>
	<label for="mailing">Хочу получать анонсы новых митапов</label>

	<br><br>
	
	<input type="submit" value="Отправить">
</form>

<?php if ($message): ?>
	<p><?= $message ?></p>
<?php endif; ?>