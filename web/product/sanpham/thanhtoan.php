<?php
    session_start();
    include("../../config.php");
    $id_khachhang = $_SESSION['id_khachhang'];
    $code_order=rand(0,9999);
    $insert_cart= " INSERT into tbl_cart(id_khachhang,code_cart,cart_status) values('$id_khachhang','$code_order',1)";
    $cart_query= mysqli_query($conn, $insert_cart);
    if($cart_query){
        foreach($_SESSION['cart'] as $key => $value){
            $id_sanpham= $value['id'];
            $soluong = $value['soluong'];
            $insert_order_detail=" INSERT into tbl_cart_detail (id_sanpham,code_cart,soluong) values('$id_sanpham','$code_order','$soluong')";
            mysqli_query($conn,$insert_order_detail);
        }
    }
    unset($_SESSION['cart']);
    header("location:../../products.php?action=camon");
?>