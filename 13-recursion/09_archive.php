<?php
	declare(strict_types=1);
	
	/**
	 * Архив документов: поиск PDF
	 * data: 16.01.2026
	 */
	
	$archive = [
		'contract_final.pdf',
		'photo_base' => [
			'vacation.jpg',
			'office_party.png'
		],
		'documents' => [
			'report_2025.pdf',
			'old_stuff' => [
				'scanned_id.pdf',
				'manual.txt'
			]
		],
		'invoice.pdf'
	];
	
	function findPdfFiles(array $data): array
	{
		$result = [];
		
		foreach ($data as $elem) {
			if (is_array($elem)) {
				$result = array_merge($result, findPdfFiles($elem));
			} elseif (is_string($elem)) {
				if (str_contains($elem, '.pdf')) {
					$result[] = $elem;
				}
			}
		}
		
		return $result;
	}
	
	$allPdfs = findPdfFiles($archive);
	
	echo "<h3>Список PDF файлов:</h3>";
	echo "<pre>";
	print_r($allPdfs);
	echo "</pre>";
	
	