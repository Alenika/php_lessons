<?php
	// ⊗ppPmFmDGEP
	
	/* ------------- №1 ------------- */
	
	if (isset($_POST['name'])) {
		$name = htmlspecialchars($_POST['name']);
		$age = htmlspecialchars($_POST['age']);
		
		echo "Меня зовут " . $name . "<br>";
		echo "Мне {$age} лет";
	} else {
		echo "Форма не была отправлена.";
	}