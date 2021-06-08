<?php
    session_start();
    require_once "config.php";
         if(isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != '')
         {
            //thực hiện xử lý khi người dùng ấn submit và điền đầy đủ thông tin
            $username = $_POST["username"];
            $password = $_POST["password"];
            $password = md5($password);
            $sql = "select * from public.user where username ='$username' and password = '$password' limit 1";
            $user= pg_query($dbconn,$sql);
            echo $sql;
            // if(pg_num_rows($user) > 0 )
            // {  
            //    $row_data= pg_fetch_array($user);
            //    $_SESSION['user']= $username;
            //    $_SESSION['id_khachhang']= $row_data['id_user'];
            //    header("location:../index.php");
            // }
            // else
            // {
            //    $_SESSION["thongbao"] = "Wrong username or password!";
            //    header("location: ./login.php");
            // }
         } 
         else
         {
            $_SESSION["thongbao"]="Please enter your complete information!";
            header("location:./login.php");
         }
         if(isset($_POST["reset"]))
         header("location: ./register.php");
      ?>