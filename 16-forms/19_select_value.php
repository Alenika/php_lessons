<?php
/*
 * Атрибут value в селектах в PHP
 */

// ⊗ppPmFmSlAV
// 312 of 447

?>

<h3>Задача 1</h3>
<p>
	При использовании атрибута value на сервер будет отправляться значение этого атрибута.
	Текст внутри option видит пользователь и он может меняться. В то время как value остается прежним.
	Вместо длинных строк можно передавать более короткие названия и цифры, что экономит место.
</p>

<h3>Задача 2</h3>
<?php
	$message = null;
	
	if (isset($_POST['country'])) {
		$country = $_POST['country'];
		$message = $country;
	}
?>

<form action="" method="post">
	<label for="country">Выберите вашу страну:</label>
	<select id="country" name="country">
		<option value="be">Беларусь</option>
		<option value="ru">Россия</option>
		<option value="kz">Казахстан</option>
		<option value="uz">Узбекистан</option>
		<option value="ar">Армения</option>
	</select>

	<br><br>

	<input type="submit" value="Выбрать">
</form>

<?php if ($message): ?>
	<p><?= $message ?></p>
<?php endif; ?>





