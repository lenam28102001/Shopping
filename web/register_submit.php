<?php
    session_start();
    include ("config.php");
// kiem tra nguoi dung co nhap du thong tin hay nhan submit chua 
    if(isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["repassword"] != '')
    {
        //thực hiện xử lý khi người dùng ấn submit và điền đầy đủ thông tin
        $username = $_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        if( $password != $repassword){
            $_SESSION["thongbao"]="Re-entered password is incorrect!";
            header("location: register.php");
            die();
        }
        $sql = "SELECT * FROM user Where username = '$username'";
        $result = mysqli_query($conn, $sql);
        $password =md5($password);
        if (mysqli_num_rows($result) >0 ){
            $_SESSION["thongbao"] = "Username already exists!";
            header("location:register.php");
            die();
        }
        $sql = "INSERT INTO user (username, password) VALUES ('$username','$password')";
        $row=mysqli_query($conn,$sql);
        $_SESSION["thongbao"] = "Register successful";
        header("location:login.php");
    }
    else{
        $_SESSION["thongbao"] = "Please enter your complete information!";
        header("location:register.php");
    }
    if(isset($_POST["reset"]))
    header("location: register.php");
?>