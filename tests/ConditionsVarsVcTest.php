<?php
	declare(strict_types=1);
	use PHPUnit\Framework\TestCase;
	
	final class ConditionsVarsVcTest extends TestCase
	{
		public function
		testOutputWhenVar1Greater(): void
		{
			$this->expectOutputString('---');
			include __DIR__.
				'/../conditions/conditions_vars.php';
		}
	}
