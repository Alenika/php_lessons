<?php
	$name = $_GET['name'] ?? 'World';
	$age = $_GET['age'] ?? 'unknown';
	$safe_name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
	$safe_age = htmlspecialchars($age, ENT_QUOTES, 'UTF-8');
	echo "Hello, $safe_name! You are $safe_age years old.";
	?>
<!doctype html>
<html lang = 'ru'>
<head>
	<meta charset = "utf-8">
	<title>Hello</title>
</head>
<body>
	<h1><?php echo "Hello, $safe_name!"; ?></h1>
	<p>You are <?php echo $safe_age; ?> years old.</p>
	<form method = "get">
		<input name = "name" placeholder = "Введите имя"/>
		<input name = "age" placeholder = "Введите возраст"/>
		<button type = "submit">Поздороваться</button>
	</form>
</body>
