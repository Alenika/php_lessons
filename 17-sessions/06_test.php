<?php
	session_start();
	
	echo "Информация о пользователе:<br>";
	echo "Фамилия: " . $_SESSION['surname'] . "<br>";
	echo "Имя: " . $_SESSION['name'] . "<br>";
	echo "Возраст: " . $_SESSION['age'] . "<br>";