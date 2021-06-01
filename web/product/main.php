<div class="clear"></div>
<div class="main">
    <?php
        if(isset($_GET['action'])){
            $tam = $_GET['action'];
        }else{
            $tam='';
        }
        if($tam =='showsp'){
            include("sanpham/showsp.php");
        }
        elseif($tam =='sanpham'){
            include("sanpham/sanpham.php");
        }
        elseif($tam =='camon'){
            include("sanpham/camon.php");

        }elseif($tam =='giohang'){
            include("sanpham/giohang.php");

        }
        else{
        }
    ?>
</div>