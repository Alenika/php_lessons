<?php
/*
 * GET запросы с помощью ссылок в PHP (ppPmFmGQL)
 */

// 315 of 447

?>

<h3>Задача №1: Три ссылки вручную</h3>

<a href="?n=1">Число 1</a>
<a href="?n=2">Число 2</a>
<a href="?n=3">Число 3</a>
<br><br>

<?php
	if (isset($_GET['n'])) {
		echo $_GET['n'];
	}
?>

<h3>Задача №2: 10 ссылок в цикле</h3>
<?php
	for ($i = 1; $i <= 10; $i++) {
		echo "<a href='?num=$i'>Ссылка $i</a><br>";
	}
	
	if (isset($_GET['num'])) {
		echo "Результат: {$_GET['num']}";
	}
?>

<h3>Задача №3: Ссылки из массива</h3>
<?php
	$arr = ['a', 'b', 'c', 'd', 'e'];
	
	foreach ($arr as $key => $elem) {
		echo "<a href='?id=$key'>Показать элемент</a><br>";
	}

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		
		if (isset($arr[$id])) {
			echo $arr[$id];
		}
	}
