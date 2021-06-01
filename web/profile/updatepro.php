<?php
    session_start();
    include('../config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
</head>
<body>
<form action="profile_submit.php" method="POST" enctype="multipart/form-data">
  <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" >
                <tr>
                <td>Hinh anh </td>
                <td><input type ="file" name="hinhanh"></td>
                </tr>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" placeholder="Name" name="fullname" ></div>
                        <div class="col-md-12"><label class="labels">PhoneNumber</label><input type="text" class="form-control" placeholder="enter phone number" name="phone"></div>
                        <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="enter address" name="address"></div>
                        <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" name="email"></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" name="save">Save Profile</button></div>
                </div>
            </div>
    </div>
</div>
</form>
</body>
<style>
body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>
</html>