<?php
/*
 * Сохранение выбранного значения в радиокнопках после отправки в PHP
 */

// ⊗ppPmFmRdSV
// 310 of 447

?>

<h3>Выбор языка</h3>

<form action="" method="post">
	<p>Выберите язык</p>
	
	<input id="en" type="radio" name="language" value="english"
	<?php if (!empty($_POST['language']) && $_POST['language'] === 'english') echo 'checked'; ?>>
	<label for="en">Английский язык</label>
	
	<br><br>
	
	<input id="ru" type="radio" name="language" value="russian"
	<?php if (!empty($_POST['language']) && $_POST['language'] === 'russian') echo 'checked'; ?>>
	<label for="ru">Русский язык</label>
	
	<br><br>
	
	<input id="sp" type="radio" name="language" value="spanish"
	<?php if (!empty($_POST['language']) && $_POST['language'] === 'spanish') echo 'checked'; ?>>
	<label for="sp">Испанский язык</label>
	
	<br><br>
	
	<input id="cn" type="radio" name="language" value="chinese"
	<?php if (!empty($_POST['language']) && $_POST['language'] === 'chinese') echo 'checked'; ?>>
	<label for="cn">Китайский язык</label>
	
	<br><br>
	
	<input type="submit" value="Выбрать">
</form>
