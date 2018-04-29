<?php

$people = array('John', 'Mason', 'Ron');
echo $people[1];

$cars  =['Haeny', 'Merwsd', 'Podfg'];
echo $cars;
echo "<br> ";

echo count($cars); 
echo " <br>";
var_dump($cars);
echo "<br> ";

$people2 = array("Brad" => 35, "Willy" => 24);
$ids = [22 => "Rend", 35 => "Weast", 16 => "Posjd"];

echo $people2["Willy"]; echo "<br>";
echo $ids[16]; echo "<br> ";

$people2['Jill'] = 42;
print_r($people2); echo "<br>";

$cars2 = array(
	array("Honda", 10, 20),
	array("Toyota", 25, 13),
	array("Mazda", 36, 23),
);

echo $cars2[2][0];


?>