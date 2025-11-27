<?php
	/*
	 * Несохраняющие скобки в регулярках PHP
	 */

	// ⊗ppPmRgNPB
	
	/* ------------- №1 ------------- */
	$str = 'aaa$@bbb aaa$@$@bbb aaa$@$@$@bbb';
	
	$reg = '#([a-z]{3})(?:\$@)+([a-z]{3})#';
	
	preg_match_all($reg, $str, $res);
	
	var_dump($res);
