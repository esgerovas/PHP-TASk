<?php 
/*PHP OOP yaxinlasmasinnan istifade ederek iki tarix arasindaki ferqi tapin.
Qeyd: Uzun hesablamalar aparmaga ehtiyac yoxdur. maksimum 4 setirle hell edin*/
	$date1 = new DateTime('September 20th, 2016');
	$date2 = new DateTime('September 11th, 2016');
	$diff = $date2->diff($date1);
	echo $diff->format('%a gun');

 ?>