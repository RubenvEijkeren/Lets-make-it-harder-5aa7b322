<?php
if ($argc < 4) {
	echo "Too little arguments.".PHP_EOL;
	die;
}
if ($argc > 4) {
	echo "Too many arguments".PHP_EOL;
	die;
}
if ($argv[1] === $argv[2]) {
	echo "Perfectly balanced, as all things should be.".PHP_EOL;
}
else{
	$diff = abs($argv[1] - $argv[2]);
	$values = explode(',', $argv[3]);
	sort($values);
	foreach ($values as $value) {
		if ($argv[1]+$value == $argv[2] || $argv[1]-$value == $argv[2]) {
			echo "Perfectly balanced, as all things should be...... but only if you add ".$value.PHP_EOL;
			die;
		}
	}
	$i = 0;
	$j = count($values)-1;
	while ($i != $j){
//		echo "i: " . $values[$i] ."j: " .  $values[$j]. PHP_EOL;
		if ($values[$i] + $values[$j] == $diff) {
			echo "Perfectly balanced, as all things should be...... but only if you add ".$values[$i] . " and " . $values[$j];
			die;
		}
		if ($values[$i] + $values[$j] > $diff) {
			$j--;
		}
		if ($values[$i] + $values[$j] < $diff) {
			$i++;
		}
	}
	echo "Unable to balance." . PHP_EOL;
}
?>