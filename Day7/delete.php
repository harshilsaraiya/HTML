<?php 
    $Connection = mysqli_connect("localhost", "root", "","db_internship");
     $id= $_GET['deleteid'];

         mysqli_query($Connection, "delete from tbl_user where user_id= {$id}'")
               or die(mysqli_error($Connection));

        if ($q) {
            echo "<script>alert('record deleted;window location='table.php';</script>";
        }
 ?>