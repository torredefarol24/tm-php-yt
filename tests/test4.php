<?php 

function simpleFunction(){
	echo "Hey <br>";
}

simpleFunction();

function sayHey($name="Yall"){
	echo "Hey $name <br>";
}

sayHey("Mark");

function addNum($num1, num2){
	return $num1 + $num2;
}

echo addNum(5,7);



?>