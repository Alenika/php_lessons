<?php
	/*
	 * Введение в регулярные выражения в PHP
	 */

	// ⊗ppPmRgInr
	
	$str = 'ahb acb aeb aeeb adcb axeb';
	
	/* ------------- №1 ------------- */
	echo preg_replace('#a.b#', '!', $str);
	//! ! ! aeeb adcb axeb
	
	echo PHP_EOL;
	
	/* ------------- №2 ------------- */
	echo preg_replace('#a..b#', '!', $str);
	// ahb acb aeb ! ! !