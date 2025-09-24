<?php
	declare(strict_types=1);
	
	use PHPUnit\Framework\TestCase;
	
	final class ConditionsStrictTest extends TestCase {
		public function
		testAllStrictComparisons(): void
		{
			$this->expectOutputString(
				"+++"
				. "+++"
				. "+++"
				. "---"
				. "+++"
			);
			include __DIR__ .
				'/../conditions/strict.php';
		}
	}
	
