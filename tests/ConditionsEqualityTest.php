<?php
	declare(strict_types = 1);
	
	use PHPUnit\Framework\TestCase;
	
	final class ConditionsEqualityTest extends TestCase
	{
		public function testOutputWhenEqual10():
		void
		{
			$this -> expectOutputString('+++');
			include __DIR__.
				'/../conditions/equality.php';
		}
	}
	
