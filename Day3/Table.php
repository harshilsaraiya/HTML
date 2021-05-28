<?php
echo "<table border= 1";
for ($a=0;$a<100;$a++){
    echo "<tr>";
    if ($a%2==0){
        echo "<td bgcolor='blue'>$a</td>";
    } else {
        echo "<td bgcolor='red'>$a</td>";
    }
    echo "</tr";
}
echo "</table>";