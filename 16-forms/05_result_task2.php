<?php
	// ⊗ppPmFmDGEP
	
	/* ------------- №2 ------------- */
	$pass = '12345';
	
	if (isset($_POST['pass'])) {
		if ($_POST['pass'] === $pass) {
			echo "Правильный пароль";
		} else {
			echo "Неправильный пароль";
		}
	}