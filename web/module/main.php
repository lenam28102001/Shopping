<div class="clear"></div>
<div class="main">
    <?php
        if(isset($_GET['action']) && $_GET['query']){
            $tam = $_GET['action'];
            $query = $_GET['query'];
        }else{
            $tam='';
            $query ='';
        }
        if($tam=='quanlisp' && $query=='them'){
            include("quanlisp/them.php");
            include("quanlisp/lietke.php");
        }
        elseif($tam=='quanlisp' && $query=='sua'){
            include("quanlisp/sua.php");
        }
        else{
            include("dashboard.php");
        }
    ?>
</div>