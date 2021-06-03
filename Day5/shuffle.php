<?php
$myArray = array("Football", "Baseball", "Hockey", "Tennis", "Boxing");
shuffle($myArray);          
 // Shuffle the array Hockey
foreach ($myArray as $key => $value) 
{
	echo "<br /> $value ";	
}	