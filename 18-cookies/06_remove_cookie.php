<?php
	/*
	 * Удаление кук в PHP
	 * ⊗ppPmCkRm
	 * 329 of 447
	 */

	if (!isset($_COOKIE['test_delete'])) {
		$value = "I'm still alive!";
		
		setcookie('test_delete', $value, time() + 3600);
		
		$_COOKIE['test_delete'] = $value;
		
		echo "Кука создана<br><br>";
		
	} else {
		
		setcookie('test_delete', '', time() - 3600);
		
		unset($_COOKIE['test_delete']); // !!! нужно удалить вручную из массива
		
		echo "Удаляем и обновляем!<br><br>";
	}
	
	var_dump($_COOKIE['test_delete'] ?? 'Уже удалена!');

	// Кука создана
	// string(16) "I'm still alive!"
	
	// Удаляем и обновляем!
	//string(22) "Уже удалена!"