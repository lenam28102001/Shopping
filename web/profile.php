<?php
    session_start();
    include('config.php');
    if(!isset($_SESSION['profile'])){
        header("location: profile/insertpro.php");
        die();
    }
    $nameUpdate = $_SESSION['user'];
    $sql = "SELECT * from user  where username = '" . $nameUpdate . "' limit 1 ";
    $query = mysqli_query($conn,$sql);
    $row= mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
</head>
<body>
<form  method="POST" enctype="multipart/form-data">
  <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img src="module/quanlisp/uploads/<?php echo $row['hinhanh'] ?>"class="rounded-circle mt-5" style="width:100%">
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile</h4>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Name: <?php echo $row['Fullname'] ?> </label></div>
                        <div class="col-md-12"><label class="labels">PhoneNumber: <?php echo $row['phone'] ?></div>
                        <div class="col-md-12"><label class="labels">Address: <?php echo $row['address'] ?></div>
                        <div class="col-md-12"><label class="labels">Email ID: <?php echo $row['email'] ?></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit"><a href="profile/updatepro.php">Update profiles</a> </button></div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit"><a href="../index.php">Home</a> </button></div>
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
    font-size: 100%;
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>
</html>