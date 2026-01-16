<?php
	declare(strict_types=1);
	
	/**
	 * Научиться правильно складывать результаты рекурсии в общую сумму.
	 * data: 16.01.2026
	 */
	
	echo "<p>У нас есть дерево отделов компании. В каждом отделе либо число (количество сотрудников), либо подотделы. Нужно посчитать общее количество людей.</p>";
	
	$company = [
		'sales' => 5,
		'development' => [
			'frontend' => 10,
			'backend' => 8,
			'devops' => [
				'linux' => 2,
				'cloud' => 3
			]
		],
		'hr' => 2
	];
	
	function countEmployees(array $employees): int {
		$totalEmployees = 0;
		
		foreach ($employees as $employee) {
			if (is_array($employee)) {
				$totalEmployees += countEmployees($employee);
			} else {
				$totalEmployees += $employee;
			}
		}
		
		return (int)$totalEmployees;
	}
	
	echo "Общее количество сотрудников: " . countEmployees($company);
	
	
