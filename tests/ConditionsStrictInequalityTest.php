<?php
	declare(strict_types=1);
	
	use PHPUnit\Framework\TestCase;
	
	final class ConditionsStrictInequalityTest
	extends TestCase
	{
		public function
		testAllStrictInequality(): void
		{
			$this->expectOutputString(
				"1: ---\n2: ---\n3: ---\n4: +++\n5: +++\n"
			);
			include __DIR__ .
				'/../conditions/strict_inequality.php';
		}
	}
