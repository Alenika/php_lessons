<?php
/*
* Практика на формы в PHP (⊗ppPmFmPrm)
*/

// 316 of 447
?>

<h3>Задача 10: Определить день недели</h3>

<?php
$result = '';
$months = [
	1 => 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
	'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'
];

$days_ru = [
	'Monday'    => 'Понедельник',
	'Tuesday'   => 'Вторник',
	'Wednesday' => 'Среда',
	'Thursday'  => 'Четверг',
	'Friday'    => 'Пятница',
	'Saturday'  => 'Суббота',
	'Sunday'    => 'Воскресенье'
];

if (isset($_POST['day'], $_POST['month'], $_POST['year'])) {
	$d = $_POST['day'];
	$m = $_POST['month'];
	$y = $_POST['year'];
	
	$dateStr = "$y-$m-$d";
	$timestamp = strtotime($dateStr);
	
	$enDay = date('l', $timestamp);
	
	$result = $days_ru[$enDay];
}
?>

<form action="" method="POST">
    <select name="day">
        <?php for ($i = 1; $i <= 31; $i++): ?>
            <option value="<?= $i ?>" <?= (isset($_POST['day']) && $_POST['day'] == $i) ? 'selected' : '' ?>>
                <?= $i ?>
            </option>
        <?php endfor; ?>
    </select>

    <select name="month">
        <?php foreach ($months as $num => $name): ?>
            <option value="<?= $num ?>" <?= (isset($_POST['month']) && $_POST['month'] == $num) ? 'selected' : '' ?>>
                <?= $name ?>
            </option>
        <?php endforeach; ?>
    </select>

    <select name="year">
        <?php for ($i = 1990; $i <= 2025; $i++): ?>
            <option value="<?= $i ?>" <?= (isset($_POST['year']) && $_POST['year'] == $i) ? 'selected' : '' ?>>
                <?= $i ?>
            </option>
        <?php endfor; ?>
    </select>

    <input type="submit" value="Узнать день недели">
</form>

<?php if ($result): ?>
    <p>Результат: <b><?= $result ?></b></p>
<?php endif; ?>


