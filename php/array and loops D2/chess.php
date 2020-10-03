


<?php 

include "mystyle.php";

echo '<table  width="400px" cellspacing="0px" cellpadding="0px" border="1px" >';

//draw rows
for($row=0; $row<8; $row++){
	echo "<tr>";
		//draw columns
		for($col=0; $col<8; $col++){
			if (($col+$row) % 2 == 0) {
				echo "<td class='lite-td'>", "</td>";
			}else{
				echo "<td class='dark-td'>", "</td>";


			}

		}//End cols loops
	echo "</tr>";
}//End rows loops

echo "</table>";


 ?>