<?php 
  $Connect = mysqli_connect("localhost","root", "", "db_internship");
     if ($_POST) {
        $name = $_POST['txt1'];
        
        $mobile = $_POST['txt3'];

 $q = mysqli_connect($Connect, "insert into tbl_user('user_id','user_name','user_gender','user_mobile'), values('HS', 'Harshil', ' Male', '123')") 
     or die(mysqli_error($Connect));
     if($q) {
        echo "<script>alert('Record Added')</script>";
    }
     }


?>


<html>
          <body>
               <form method="post">
                      Name : <input type="text" name="txt1"/>
                      Gender : <select>
                                 <option>Male</option>
                                 <option>Female</option>
                                 </select> 
                      Mobile : <input type="number" name="txt3"/>
                      <input type="submit"/>
               </form>  
          </body>     
</html>