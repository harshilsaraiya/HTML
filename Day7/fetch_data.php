<?php
//DB connection 
$Connection =  mysqli_connect("localhost","root","","db_internship");
 $q = mysqli_query($Connection,"select * from tbl_user")
    or die(mysqli_error($Connection));
// below function will fetch data as numerical array
   $row = mysqli_fetch_row($q);
   //debug
   print_r($row);
?>