<?php 
	$output = "wow";
	$output2 = "man";
	$output3 = "$output $output2";
	$num1 = 4;
	$num2 = 10;

	define('PARTDATE', 251447);
	define('GREETING', 'Ola Senior'); 

	$float1 = 5.5;
	$conditionCheck = true;
	echo $output.' ' . $num1. ' '.$float1.' '.$conditionCheck;
	echo $num1 + $num2;
	echo $output . ' ' . $output2;
	echo $output3;

	echo GREETING;
	echo PARTDATE;
?>