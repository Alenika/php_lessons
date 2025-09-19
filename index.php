<?php
	$name = $_GET['name'] ?? 'World';
	$safe = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
	?>
<!doctype html>
<html lang 'ru'>
<head>
	<meta charset = "utf-8">
	<title>Hello</title>
</head>
<body>
	<h1><?php echo "Hello, $safe!"; ?></h1>
	<form method = "get">
		<input name = "name" placeholder = "Введите имя">
		<button type = "submit">Поздороваться</button>
	</form>
</body>
