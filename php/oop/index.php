<?php 

//include code
include "nav.php";
include "car.php";
include "showcar.php";


//control and create
$car1 = new Car("lamorgini", 2020, "green");
$car2 = new Car("volvo", 1970,"yellow");
$car3 = new Car("Pegaut", 2011,"pink");



$arr = [$car1, $car2, $car3];
foreach ($arr as $onecar){
	show($onecar);

}



//view-echo
// show($car1);
// show($car2);
// show($car3);






 ?>