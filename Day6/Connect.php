<?php
    $host = "localhost";
    $username = "root";
    $passwd = "";
    $dbname = "db_internship";
    // Connection function
    $Connect = mysqli_connect($host,$username,$passwd,$dbname);
    $q = mysqli_query($Connect, "insert into tbl_user(user_id,user_name,user_gender,user_mobile) values('HS', 'Harshil', ' Male', '123')")
     or die("error". mysqli_error($Connect));

     if($q) {
         echo "<script>alert('Record Added')</script>";
     }
      