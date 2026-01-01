<?php
/*
* Практика на формы в PHP (⊗ppPmFmPrm)
*/

// 316 of 447

?>

<h3>Задача 8: количество слов и количество символов в тексте</h3>

<?php
$wordCount = 0;
$charCount = 0;

if (!empty($_POST['text_data'])) {
	$text = $_POST['text_data'];
	
	$charCount = mb_strlen($text);
	
	$words = preg_split('/\s+/u', trim($text), -1);
	$wordCount = count($words);
}
?>

<form action="" method="post">
<label for="text">Введите ваш текст:</label><br>
<textarea id="text" name="text_data" rows="5" cols="40">
	<?= $_POST['text_data'] ?? '' ?></textarea>
<br><br>
<input type="submit" value="Посчитать">
</form>

<?php if (!empty($_POST['text_data'])): ?>
  <p>Количество символов: <b><?= $charCount ?></b></p>
  <p>Количество слов: <b><?= $wordCount ?></b></p>
<?php endif; ?>
	



