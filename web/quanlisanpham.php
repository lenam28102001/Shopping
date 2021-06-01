<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admincp</title>
    <link rel="stylesheet" type="text/css" href="../CSSweb/styleadmin.css">
</head>
<body>
        <h3 class= "title_admin" > Welcome to AdminCP</h3>
        <div class="wrapper">
        <?php
            include ("config.php");
            include ("module/header.php");
            include ("module/menu.php");
            include ("module/main.php");
            include ("module/footer.php");
        ?>
        </div>
</body>
</html>