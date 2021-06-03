<?php
$arr = array('c', 'c++', 'java', 'android', 'php'); 
$indexofarray = array_rand($arr);
//Returns Array Index echo $arr[$indexofarray];
?>
<?php
$arr = array('c', 'c++', 'java', 'android', 'php');
 $indexofarray = array_rand($arr,2);
 //Returns Array Index 
foreach ($indexofarray as $key => $value) 
{ echo "<br />$key - <strong>" . $arr[$value] . "</strong>";
}
?>
