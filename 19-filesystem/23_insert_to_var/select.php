<?php
	$days = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'];
?>

<select>
	<?php foreach ($days as $day): ?>
	<option><?= $day ?></option>
	<?php endforeach; ?>
</select>

