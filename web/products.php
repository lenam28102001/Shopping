<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../cssweb/web.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
    <h3 class="title_admin">Products</h3>
      <nav class="navbar navbar-expand-sm bg-dark">
         <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../index.php">Home</a>
             </li>
            <li class="nav-item">
               <a class="nav-link" href="quanlisanpham.php">Product Management</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="products.php?action=showsp">Display products</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="products.php?action=giohang">Cart</a>
             </li>
         </ul>
      </nav>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <div class="wrapper">
        <?php
            include("config.php");
            include("product/main.php");
            include("product/footer.php");
            
        ?>
    </div>
</body>
<style>
    h3.title_admin{
    text-align: center;
    font-size: 40px;
    color: blue;
}
body{
    background:white;
}
body {
    background: white;
    background-size: cover;
    font-size: 16px;
    font-family: Lato, sans-serif;
  }
  section {
    text-align: center;
  }
  .footer-basic {
  padding:40px 0;
  background-color: #262626;
  color: whitesmoke;
}

.footer-basic ul {
  padding:0;
  list-style:none;
  text-align:center;
  font-size:18px;
  line-height:1;
  margin-bottom:0;
}

.footer-basic li {
  padding:0 10px;
}

.footer-basic ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.8;
}

.footer-basic ul a:hover {
  opacity:1;
}

.footer-basic .social {
  text-align:center;
  padding-bottom:25px;
}

.footer-basic .social > a {
  font-size:24px;
  width:40px;
  height:40px;
  line-height:40px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  border:1px solid #ccc;
  margin:0 8px;
  color:inherit;
  opacity:0.75;
}

.footer-basic .social > a:hover {
  opacity:0.9;
}

.footer-basic .copyright {
  margin-top:15px;
  text-align:center;
  font-size:13px;
  color:#aaa;
  margin-bottom:0;
}
</style>
</html>