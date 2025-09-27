<?php
	/*
	 * Оператор объединения с null в PHP
	 */

	// ⊗ppPmCdNC №1
	$user = [
		'name' => 'john',
		'age' => 30];
	
	$name = $user['name'] ?? 'unknown';
	
	/*
	 * Цепочки операторов объединения с null в PHP
	 */
	
	// ⊗ppPmCdNCCh №1
	$res = $user['name'] ?? $user['surname'] ?? '';
	