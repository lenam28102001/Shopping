<?php
  session_start();
  include ('../config.php');
  if(isset($_POST['save_pro'])){
        $nameUpdate = $_SESSION['user'];
        $ten=$_POST["insertname"];
        $phone=$_POST["insertphone"];
        $email=$_POST["insertemail"];
        $address=$_POST["insertaddress"];
        $hinhanh=$_FILES['inserthinhanh']['name'];
        $hinhanh_tmp=$_FILES['inserthinhanh']['tmp_name'];
         $sql_them="INSERT into user(Fullname,phone,email,address,hinhanh) values('$ten','$phone','$email','$address','$hinhanh') where username = '" . $nameUpdate . "' ";
        $query=mysqli_query($conn,$sql_them);
        move_uploaded_file($hinhanh_tmp,'../module/quanlisp/uploads/'.$hinhanh);
        $_SESSION['profile']=$nameUpdate;
        header("location: ../profile.php");
    }
   
?>
