<!<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Моя первая программа</title>
	</head>
	<body>
	<h1>Проблема с кодировками</h1>
	<?php
		mb_internal_encoding('UTF-8'); // проблема с кодировками
		echo "Это PHP. Моя первая программа";
	?>
	<h1>Вывод ошибок</h1>
	<p>error_reporting(E_ALL)</p>
	<p>ini_set('display_errors', 'on');</p>
	
	<?php
		// error_reporting(E_ALL);
		// ini_set('display_errors', 'on');
	?>
	</body>
</html>