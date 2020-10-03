<?php 


function show($car){
	if ($car->year > 2010) {
		echo "<div class='bg-dark text-danger' style='background-color:'><h2>Model:" . $car->model . "</h2>".
		"<h2>Year:" . $car->year . "</h2>".
			"<h2>color:" . $car->color . "</h2>

	</div>";
	}
	else{
		echo "it is under than 2010";
	}

	


}





 ?>