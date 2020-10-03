<?php 
include "nav.php";

require_once "nav.php";

// $days = ["ma"=>"10-14","di","wo"];

$cars = array("volvo","ms");
$cars = ["volvo", "ms"];

$days = [
["ma",10,12,"Net"],
["di",12,14,"tech"],
["wo",16,18,"Web"]
];


foreach ($days as $day) {
	if ( $day[2]<16) {
		echo $day[3],"<br>";

	}
	
}

//print the subject name befor 16 uur









// function _p($arr, $arrName){
//  	echo "<h3>$arrName</h3>";
//  	echo "<pre>" . print_r($arr) . "</pre>";
// }

// _p($days, "Days Array");

 ?>