<?php 
//array for-loop
//loops types in php
// 1- while()
// 2- Do... while()

// 3- for  	  -->Num
// 4- foreach -->For all items in an array



include "nav.php";
$cars = ["opel","volvo","mazda"];


foreach ($cars as $car ){
echo "<h1> - {$car} </h1>";
}


for($i=0; $i <= 2; $i++){
echo $cars[$i], "<br>";
}

$nums = [1,2,3,4,5,6,7,8,9,10];
foreach ($nums as $num) {
	if($num == 10){
	echo $num, " is found", "<br>";

	}
	 break;

}

$mycondition = 0;
$bool = true;
while ($bool) {
	
	echo $mycondition;
	$mycondition += 1;
	if ($mycondition == 8) {
		$bool = false;
	}
}


// print_r ($cars);


 ?>