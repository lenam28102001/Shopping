<?php
      session_start();
      require_once "config.php";
      if(isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != '')
      {
         //thực hiện xử lý khi người dùng ấn submit và điền đầy đủ thông tin
         $username = $_POST["username"];
         $password = $_POST["password"];
         $password = md5($password);
         $sql = "select * from public.user where username = '".$username."' and password = '".$password."'";
         $user= pg_query($dbconn,$sql);
         echo $user;
         if(pg_num_rows($user) > 0 )
         {  
            $row_data= pg_fetch_array($user);
            $_SESSION['user']= $username;
            $_SESSION['id_khachhang']= $row_data['id_user'];
            header("location:../index.php");
         }
         else
         {
            $_SESSION["thongbao"] = "Wrong username or password!";
            header("location: ./login.php");
         }
      } 
      else
      {
         $_SESSION["thongbao"]="Please enter your complete information!";
         header("location:./login.php");
      }
      if(isset($_POST["reset"]))
      header("location: ./register.php");
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container-fluid mt-3">
         <h2>Login</h2>
         <div class="session">
               <?php
                  if(isset($_SESSION["thongbao"])){
                     echo $_SESSION["thongbao"];
                     unset($_SESSION["thongbao"]);
                  }
               ?>
         </div>
         <form  method ="POST" >
            <!-- Vertical -->
            <div class="form-group">
               <label for="myEmail">User</label>
               <input type="text" id = "myEmail" class="form-control" placeholder="User Name" name = "username">
               <P>admin123</P>
               <label for="myPassword">Password</label>
               <input type="password" id="myPassword" class="form-control" placeholder="Password" name = "password">
               <P>123</P>
               <div>
                  <button type="submit" class="btn btn-primary" name= "submit">Submit</button>
                  <button type ="reset" class="btn btn-primary" name = "reset">Reset</button>
                  <a>Don't have an account?</a>
                  <a href="register.php">Sign up</a>
               </div>
            </div>  
         </form>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   </body>
   <style>
   .session{
      color: red;
   }
   </style>
</html>