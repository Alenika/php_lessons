<?php
	/*
	 * Shortened Code for Saving Default Values in PHP
	 */

	// ⊗ppPmFmVRShC
	// 303 of 447
	
	/* ------------- №1 ------------- */
	$year  = $_GET['year']  ?? date('Y');
	$month = $_GET['month'] ?? date('m');
	$day   = $_GET['day']   ?? date('d');
?>

<form action="" method="GET">
	<input name="year"  value="<?= $year ?>">
	<input name="month" value="<?= $month ?>">
	<input name="day"   value="<?= $day ?>">
	<input type="submit">
</form>

<?php
	if (isset($_GET['year'], $_GET['month'], $_GET['day'])) {
		$inputTimestamp = mktime(0, 0, 0, $month, $day, $year);
		$nextYear = $year + 1;
		$newYearTimestamp = mktime(0, 0, 0,1, 1, $nextYear);
		
		$secondsDiff = $newYearTimestamp - $inputTimestamp;
		$daysRemaining = round($secondsDiff / (60 * 60 * 24));
		
		echo "До Нового Года осталось $daysRemaining дней.";
	}
?>

<h3>Планирование тренировки</h3>

<?php
	$currentHour = date('H');
	$currentMin = date('i');
	
	$hour = $_GET['hour'] ?? $currentHour;
	$minute = $_GET['minute'] ?? $currentMin;
	$duration = $_GET['duration'] ?? '60';
?>

<form action="" method="get">
	<label>Начало (ч:мин):</label>
	<input id="hour" type="number" name="hour" value="<?= $hour ?>" min="0" max="23">
    <input id="minute" type="number" name="minute" value="<?= $minute ?>" min="0" max="59">
	
	<br><br>
	<label for="duration">Длительность (мин):</label>
	<input id="duration" type="number" name="duration" value="<?= $duration ?>">
	
	<input type="submit" value="Рассчитать окончание">
</form>

<?php
	if (isset($_GET['hour'], $_GET['minute'], $_GET['duration'])) {
		$startTime = mktime($hour, $minute, 0, date('m'), date('d'), date('Y'));
		$endTime = $startTime + ($duration * 60);
		
		echo  "Тренировка закончится в " . date("H:i", $endTime);
	}
?>

<h3>Калькулятор времени до конца рабочего дня</h3>

<?php
	$defaultStart = '09';
	$defaultDuration = '8';
	
	$startDay = $_GET['startDay'] ?? $defaultStart;
	$durationDay = $_GET['durationDay'] ?? $defaultDuration;
?>

<form action="" method="get">
	<label for="startDay">Время начала работы (час):</label>
	<input id="startDay" type="text" name="startDay" value="<?= $startDay ?>">
	<br><br>
	<label for="durationDay">Продолжительность смены в часах:</label>
	<input id="durationDay" type="text" name="durationDay" value="<?= $durationDay ?>">
	<input type="submit" value="Рассчитать">
</form>

<?php
	if (isset($_GET['startDay'], $_GET['durationDay'])) {
		$endDay = (int)$startDay + (int)$durationDay;
		$message = "Ваш рабочий день закончится в $endDay:00";
		echo "<p>$message</p>";
	}
