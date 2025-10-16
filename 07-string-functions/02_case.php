<?php
	/*
	 * Регистр символов в PHP
	 */

	// ⊗ppPmSFCs

	// №1
	
	$str = 'php';
	
	echo strtoupper($str);
	
	// №2
	
	$str = 'PHP';
	
	echo strtolower($str);
	
	// №3
	
	$str = 'london';
	
	echo ucfirst($str);
	
	// №4
	
	$str = 'London';
	
	echo lcfirst($str);
	
	// №5
	
	$str = 'london is the capital of great britain';
	
	echo ucwords($str);
	
	// №6
	
	$str = 'LONDON';
	
	echo ucfirst(strtolower($str));
	
	// №7
	
	$str = 'привет';
	
	echo mb_strtoupper($str);
	
	// №8
	
	$str = 'ПРИВЕТ';
	
	echo mb_strtolower($str);