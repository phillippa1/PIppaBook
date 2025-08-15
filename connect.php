<?php 

//part 18- arrays

//this is an array and in the first location this is in it
//went over array errors
$a[0] = 1;
$a[1] = "eathorne";
$a[2] = "june";
//replacing what is in an array
//$a[2] = "june2";
//adding to an array on the end
$a[] = "june3";


//use a html tag to see the php better
echo "<pre>";
print_r($a);
echo "</pre>";

echo $a[2]; 