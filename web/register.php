<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Register</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container-fluid mt-3">
         <h4 class="mb-2">Register</h4>
         <?php
            if(isset($_SESSION["thongbao"])){
               echo $_SESSION["thongbao"];
               unset($_SESSION["thongbao"]);
            }
         ?>
         <form action="register_submit.php" method = "POST">
            <div class="form-row">
               <div class="form-group col-sm-6">
                  <label for="user">User</label>
                  <input type="text" class="form-control"
                     id="myEmail"  name="username">
               </div>
               <div class="form-group col-sm-6">
                  <label for="myPassword">Password</label>
                  <input type="password" class="form-control"
                     id="myPassword"  name = "password">
               </div>
            </div>
               <div class="form-group">
                <label for="ConfirmPassword">Confirm Password</label>
                <input type="password" class="form-control"
                   id="ConfirmPassword" name = "repassword">
            </div>
            <button type="submit" class="btn btn-primary" name= "submit">Sign in</button>
            <button type ="reset" class="btn btn-primary" name = "reset">Reset</button>
         </form><br>
         <button type ="submit" class="btn btn-primary"><a href="login.php" style="color:white;">Login</a></button>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   </body>
</html>