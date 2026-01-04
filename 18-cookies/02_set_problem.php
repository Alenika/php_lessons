<?php
	/*
	 * Проблема установки кук в PHP
	 * ⊗ppPmCkSP
	 * 325 of 447
	 */

	setcookie('str3', 'eee');
	var_dump($_COOKIE['str3']);
	
	// Warning: Undefined array key "str3"
	// NULL

	// string(3) "eee"