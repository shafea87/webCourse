<?php 
include "nav.php";

$str = "Hi world";
$age = 30;
$colors = array("red", "blue", "black");
$cars = ["volvo", "opel"];


function printRed($toPrintStr, $color="blue", $num=4){
	echo "your number is {$num}";
	echo "<span style='color: $color;'>", $toPrintStr,"</span>";
	echo "<br>";
	echo "----------------------------";
	echo "<br>";

}


printRed($str, "orange");
 printRed("Hi", "green");
 printRed($age);


 ?>
