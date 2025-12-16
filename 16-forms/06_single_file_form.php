<?php
	/*
	 * Form Processing in a Single PHP File
	 */

	// ⊗ppPmFmOFH
	
?>

<h3>/* ------------- №1 ------------- */</h3>
<form action="" method="POST">
	<label for="surname">Введите фамилию:</label>
	<input id="surname" type="text" name="surname" placeholder="Макаревич">
	<br><br>
	<label for="name">Введите имя:</label>
	<input id="name" type="text" name="name" placeholder="Михаил">
	<br><br>
	<label for="middle_name">Введите отчество</label>
	<input id="middle_name" type="text" name="middle" placeholder="Антонович">
	<input type="submit" value="Отправить">
</form>
	
<?php
	if (isset($_POST['surname'])) {
		$surname = $_POST['surname'];
		$name = $_POST['name'];
		$middle = $_POST['middle'];
		
		echo "Меня зовут $surname $name $middle";
	}
?>

<h3>/* ------------- №2 ------------- */</h3>
<h3>Калькулятор площади</h3>

<form action="" method="post">
	<label for="length">Введите длину прямоугольника:</label>
	<input id="length" type="number" name="length" placeholder="2">
	<br><br>
	<label for="width">Введите ширину прямоугольника:</label>
	<input id="width" type="number" name="width" placeholder="4">
	<br><br>
	<input type="submit" value="Рассчитать площадь">
</form>

<?php
	if (isset($_POST['length'])) {
		$length = $_POST['length'];
		$width = $_POST['width'];
		
		$rectangle_area = $length * $width;
		
		echo "Площадь прямоугольника = $rectangle_area";
	}
?>

<h3>/* ------------- №3 ------------- */</h3>
<h3>Голосование</h3>

<form action="" method="post">
	<label for="vote">Согласен с правилами</label>
	<input id="vote" type="checkbox" name="agree">
	<input type="submit" value="Согласиться">
</form>

<?php
	if (isset($_POST['agree'])) {
		echo "Спасибо! Вы согласны с правилами.";
	} else {
		echo "Необходимо согласиться с правилами для продолжения.";
	}
?>

