<?php
/*
* Практика на формы в PHP (⊗ppPmFmPrm)
*/

// 316 of 447
?>

<h3>Задача 11: Гороскоп</h3>


<?php
	$prediction = '';

	$horoscopes = [
		'aries' => 'Овен: Сегодня энергия бьет ключом!',
		'taurus' => 'Телец: Будьте осторожны с финансами.',
		'gemini' => 'Близнецы: Ожидайте интересных новостей.',
		'cancer' => 'Рак: Проведите время с семьей.',
		'leo' => 'Лев: Ваше обаяние сегодня на высоте.',
		'virgo' => 'Дева: Внимание к деталям принесет успех.',
		'libra' => 'Весы: Поиск компромисса — лучший путь.',
		'scorpio' => 'Скорпион: Доверяйте своей интуиции.',
		'sagittarius' => 'Стрелец: День приключений и открытий.',
		'capricorn' => 'Козерог: Труд даст отличные плоды.',
		'aquarius' => 'Водолей: Не бойтесь оригинальных идей.',
		'pisces' => 'Рыбы: Творчество поможет в делах.'
	];
	
	$zodiacIntervals = [
			'aries' => ['21.03', '19.04'], // овен
			'taurus' => ['20.04', '20.05'], // телец
			'gemini' => ['21.05', '20.06'], // близнецы
			'cancer' => ['21.06', '22.07'], // рак
			'leo' => ['23.07', '22.08'], // лев
			'virgo' => ['23.08', '22.09'], // дева
			'libra' => ['23.09', '22.10'], // весы
			'scorpio' => ['23.10', '21.11'], // скорпион
			'sagittarius' => ['22.11', '21.12'], // стрелец
			'capricorn' => ['22.12', '19.01'], // козерог переход года!!!
			'aquarius' => ['20.01', '18.02'], // водолей
			'pisces' => ['19.02', '20.03'], // рыбы
	];
	
	if (!empty($_POST['birthdate'])) {
		$parts = explode('.', $_POST['birthdate']);
		
		if (count($parts) === 3) {
			$d = (int)$parts[0];
			$m = (int)$parts[1];
			$y = (int)$parts[2];
			
			if (checkdate($m, $d, $y)) {
				$userMD = sprintf("%02d%02d", $m, $d);
				$userSign = '';
				
				foreach ($zodiacIntervals as $sign => $dates) {
					$start = explode('.', $dates[0]);
					$startMD = $start[1] . $start[0];
					
					$end = explode('.', $dates[1]);
					$endMD = $end[1] . $end[0];
					
					if ($sign == 'capricorn') {
						if ($userMD >= $startMD || $userMD <= $endMD) {
							$userSign = $sign;
							break;
						}
					} else {
						if ($userMD >= $startMD && $userMD <= $endMD) {
							$userSign = $sign;
							break;
						}
					}
				}
				
				if ($userSign) {
					$prediction = $horoscopes[$userSign];
				}
			} else {
				$prediction = "Вы ввели некорректную дату!";
			}
		} else {
			$prediction = "Пожалуйста, введите дату полностью (дд.мм.гггг)";
		}
	}
?>

<form action="" method="post">
	<label for="birthdate">Введите вашу дату рождения в следующем формате (дд.мм.гггг):</label>
	<br><br>
	<input type="text" name="birthdate" placeholder="01.12.1990"
	<?= $_POST['birthdate'] ?? '' ?>>
	<br><br>
	<input type="submit" value="Получить гороскоп">
</form>

<?php if ($prediction): ?>
	<p><?= $prediction ?></p>
<?php endif; ?>
