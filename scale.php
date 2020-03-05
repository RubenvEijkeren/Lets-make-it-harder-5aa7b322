<?php
if ($argc < 4){
	echo "Too little arguments.".PHP_EOL;
	die;
}
if ($argc > 4){
	echo "Too many arguments".PHP_EOL;
	die;
}
if ($argv[1] === $argv[2]){
	echo "Perfectly balanced, as all things should be.".PHP_EOL;
}
else{
	$values = explode(',', $argv[3]);
	foreach ($values as $value) {
		if ($argv[1]+$value == $argv[2] || $argv[1]-$value == $argv[2]){
			echo "Perfectly balanced, as all things should be...... but only if you add ".$value.PHP_EOL;
			die;
		}
	}
	echo "No balance, unacceptable.";
}
?>