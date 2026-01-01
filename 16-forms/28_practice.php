<?php

/*
* Практика на формы в PHP (⊗ppPmFmPrm)
*/

// 316 of 447

?>

<h3>Задача 9: процентное содержание каждого символа</h3>

<?php
	$stats = [];
	$totalLen = 0;
	
	if (!empty($_POST['text_chars'])) {
		$text = $_POST['text_chars'];
		$totalLen = mb_strlen($text, 'UTF-8');
		
		$chars = mb_str_split($text);

		foreach ($chars as $char) {
			if (!isset($stats[$char])) {
				$stats[$char] = 0;
			}
			$stats[$char]++;
		}
		arsort($stats);
	}
?>

<form action="" method="post">
	<textarea name="text_chars" rows="5" cols="40"><?=  $_POST['text_chars'] ?? '' ?></textarea>
	<br><br>
	<input type="submit" value="Посчитать">
</form>

<?php if ($totalLen > 0): ?>
	<p>Общая длина текста: <?= $totalLen ?> символов</p>
	<?php foreach ($stats as $char => $count): ?>
		<?php $percent = round(($count / $totalLen) * 100, 2); ?>
		<?php $displayChar = ($char === " ") ? 'Пробел' : "'" . $char . "'"; ?>
		<?= $displayChar ?>: <?= $count ?> шт. (<?= $percent ?>%)<br>
	<?php endforeach; ?>
<?php endif; ?>
