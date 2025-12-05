<?php
	/*
	 * Basics of Working with Forms in PHP
	 */

	// ⊗ppPmFmInr
	
	/* ------------- №1 ------------- */
	$arr = ['user1', 'user2', 'user3'];
	
	/*
	 <?= foreach ($arr as $user): ?>
		<div>
		    <h2><?= $user ?></h2>
		    <p>text</p>
		</div>
	<?= endforeach: ?>
	
	/* ------------- №2 ------------- */
	$arr = [
		['name' => 'user1', 'age' => 30],
		['name' => 'user2', 'age' => 31],
		['name' => 'user3', 'age' => 32],
	];
	
	/*
	<?= foreach ($arr as $user): ?>
		<div>
			<p>name: <?= $user['name'] ?></p>
			<p>age: <?= $user['age'] ?></p>
		</div>
	<? endforeach; ?>
	 */
	
