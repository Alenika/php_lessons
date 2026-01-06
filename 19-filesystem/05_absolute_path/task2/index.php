<?php
	$root = $_SERVER['DOCUMENT_ROOT'];
	
	$file1 = $root . '/dir1/1.txt';
	$file2 = $root . '/dir2/2.txt';
	$file3 = $root . '/dir3/3.txt';
	
	$data1 = file_exists($file1) ? trim(file_get_contents($file1)) : '';
	$data2 = file_exists($file2) ? trim(file_get_contents($file2)) : '';
	$data3 = file_exists($file3) ? trim(file_get_contents($file3)) : '';
	
	$result = $data1 . ' ' . $data2 . ' ' . $data3;
	
	file_put_contents($root . '/res.txt', $result);
	
	echo "Файл успешно создан!";
