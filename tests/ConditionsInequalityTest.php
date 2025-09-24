<?php
	declare(strict_types=1);
	
	use PHPUnit\Framework\TestCase;
	
	final class ConditionsInequalityTest
	extends TestCase
	{
		public function
		testOutputWhenNotEqual10(): void
		{
			$this -> expectOutputString('Переменная test не равна 10');
			include __DIR__ .
				'/../conditions/conditions_inequality.php';
		}
	}
