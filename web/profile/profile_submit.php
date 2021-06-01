<?php
  session_start();
  include ('../config.php');
  $ten=$_POST["fullname"];
  $phone=$_POST["phone"];
  $email=$_POST["email"];
  $address=$_POST["address"];
  $hinhanh=$_FILES['hinhanh']['name'];
  $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
  if(isset($_POST['save'])){
    $nameUpdate = $_SESSION['user'];
    if($hinhanh!=''){
      move_uploaded_file($hinhanh_tmp,'../module/quanlisp/uploads/'.$hinhanh);
      $sql= "SELECT * FROM user where  username = '" . $nameUpdate . "' LIMIT 1";
    $query = mysqli_query($conn,$sql);
    while($row= mysqli_fetch_array($query)){
        unlink('../module/quanlisp/uploads/'.$row['hinhanh']);
    }
    $sql_profile = "UPDATE user SET Fullname='$ten',phone='$phone',address='$address',email='$email',hinhanh='$hinhanh' where username = '" . $nameUpdate . "'";
  }else{
    $sql_profile = "UPDATE user SET Fullname='$ten',phone='$phone',address='$address',email='$email' where username = '" . $nameUpdate . "'";
  }
    $query = mysqli_query($conn,$sql_profile);
    move_uploaded_file($hinhanh_tmp,'../module/quanlisp/uploads/'.$hinhanh);
    header("location:../profile.php");
  }
  else{
    header("location:../profile.php");
  }
   
?>
