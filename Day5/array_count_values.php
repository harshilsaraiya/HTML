<?php
$arr = array('php','c','c++','java','Android'); 
$newarr = array_count_values($arr);
foreach ($newarr as $key => $value) { 
    echo "<br/>$key - <strong>$value</strong> ";
}	
?>

