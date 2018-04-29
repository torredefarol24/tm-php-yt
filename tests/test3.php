<?php
	// for ($i=0; $i < 10; $i++) { 
	// 	echo $i . " F <br>";
	// }

	// $counter = 0;
	// while ($counter < 10){
	// 	echo $counter . " W <br>";
	// 	$counter ++;
	// }

	$people = ['Dan', 'Bery', 'Pole'];
	forEach( $people as $item){
		echo $item . "<br>";
	}

	$newPeople = [
		"Billy" => "billy@123.sdf", "Mike" => "mike@gmail.com", "Cane" => "kane@cane.com"
	];

	foreach ($newPeople as $key => $value) {
		echo $key	 . ' : ' . $value . "<br>";
	}

?>