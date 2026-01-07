<?php
	function getFile($name) {
		ob_start();
		include $name;
		return ob_get_clean();
	}
	$weekSelect = getFile('select.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>⊗ppPmFSIV</title>
</head>
<body>
	<p>Выберите день 1:</p>
	<?= $weekSelect ?>
	
	<p>Какой-то текст между ними...</p>
	
	<p>Выберите день 2:</p>
	<?= $weekSelect ?>
</body>
</html>