<?php
	/*
	 * Время жизни куки в PHP
	 * ⊗ppPmCkLT
	 * 328 of 447
	 */

	// №1
	setcookie('month_cookie', 'value', time() + 60 * 60 * 24 * 30);
	
	// №2
	setcookie('year_cookie', 'value', time() * 60 * 60 * 24 * 365);
	
	// №3
	setcookie('ten_years', 'value', time() * 60 * 60 * 24 * 365 * 10);
	
	
