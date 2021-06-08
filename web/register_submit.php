<?php
    session_start();
    require_once "config.php";
    $dbconn = pg_connect($conn_string);
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
        $sql = "SELECT * FROM public.user Where username = '$username'";
        $result = pg_query($dbconn, $sql);
        $password =md5($password);
        if (mysqli_num_rows($result) >0 ){
            $_SESSION["thongbao"] = "Username already exists!";
            header("location:register.php");
            die();
        }
        $sql1 = "INSERT INTO public.user (username, password) VALUES ('$username','$password')";
        $row=pg_query($conn,$sql1);
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