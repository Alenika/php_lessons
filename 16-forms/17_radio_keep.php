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

<hr>
<h3>Выбор по умолчанию через тернарный оператор</h3>

<?php
	$selectedLang = $_POST['language'] ?? 'belarusian';
?>

<form action="" method="post">
	<input id="be" type="radio" name="language" value="belarusian"
	<?= $selectedLang === 'belarusian' ? 'checked' : '' ?>>
	<label for="be">Belarusian</label>
	
	<br><br>
	
	<input id="hi" type="radio" name="language" value="hindi"
	<?= $selectedLang === 'hindi' ? 'checked' : '' ?>>
	<label for="hi">Hindi</label>
	
	<br><br>
	
	<input id="eng" type="radio" name="language" value="english"
		<?= $selectedLang === 'english' ? 'checked' : '' ?>>
	<label for="eng">English</label>
	
	<br><br>
	
	<input type="submit" value="Choose">
</form>

