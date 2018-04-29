<?php
	
	date_default_timezone_set('Dhaka');
	echo date('d/m/Y - l - h:i:m:a');

	$timeStamp = mktime(10,25,36, 17,7,2017);
	echo "<br>" . $timeStamp . "<br>";
	
	$newDate = date('d/m/Y - l - h:i:m:a', $timeStamp);
	echo $newDate;
?>