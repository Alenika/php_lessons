<?php
/*
* Практика на формы в PHP (⊗ppPmFmPrm)
*/

// 316 of 447

?>
<h3>Задача 7: Сколько дней осталось до дня рождения пользователя?</h3>

<?php
	$message = null;
	
	if (!empty($_POST['birthday'])) {
		$birthday = $_POST['birthday'];
		$dateParts = explode('.', $birthday);
		
		if ($dateParts) {
			$day = $dateParts[0];
			$month = $dateParts[1];
			
			$currentYear = date('Y');
			$today = strtotime('today');
			$birthdayThisYear = strtotime("$currentYear-$month-$day");
			
			if ($birthdayThisYear < $today) {
				$nextYear = $currentYear + 1;
				$birthdayThisYear = strtotime("$nextYear-$month-$day");
			}
			
			$diff = $birthdayThisYear - $today;
			$daysLeft = ceil($diff / 86400);
			
			$message = "До вашего дня рождения осталось дней: " . $daysLeft;
		} else {
			$message = "Введите дату в правильном формате!";
		}
	}
?>

<form action="" method="post">
	<label for="bd">Введите дату рождения:</label>
	<input id="bd" type="text" name="birthday" placeholder="01.12.1990"
	value="<?= $_POST['birthday'] ?? '' ?>">
	<br><br>
	<input type="submit" value="Отправить">
</form>

<?php if ($message): ?>
	<p><?= $message ?></p>
<?php endif; ?>
