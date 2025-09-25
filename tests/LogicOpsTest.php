<?php
	declare(strict_types=1);
	
	use PHPUnit\Framework\TestCase;
	
	final class LogicOpsTest extends TestCase
	{
		public function testAllLogicOps(): void
		{
			$this->expectOutputString(
				"+++\n+++\n+++\n---\n+++\n+++\n+++\n+++\n+++\n---\n+++\n"
			);
			include __DIR__ .
				'/../conditions/logic_ops.php';
		}
	}
