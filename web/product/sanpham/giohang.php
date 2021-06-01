<?php
    session_start();
?>
<?php
    if(isset($_SESSION['cart'])){

    }
?>
<table style="width:100%;text-align: center; border-collapse: collapse;" border="1">
<div class=order>Your Cart</div>
  <tr>
        <th>ID</th>
        <th>Product code</th>
        <th>Product's name</th>
        <th>Picture</th>
        <th>Amount</th>
        <th>Product price</th>
        <th>Into money</th>
        <th>Manager</th>
  </tr>
  <?php
    if(isset($_SESSION['cart'])){
        $i = 0;
        $tongtien=0;
        foreach($_SESSION['cart'] as $cart_item){
            $thanhtien=$cart_item['soluong']*$cart_item['giasp'];
            $tongtien=$tongtien+$thanhtien;
            $i++;
  ?>

  <tr>
    <td><?php echo $i?></td>
    <td><?php echo $cart_item['masp'];?></td>
    <td><?php echo $cart_item['tensanpham'];?></td>
    <td><img src="module/quanlisp/uploads/<?php echo $cart_item['hinhanh'];?>" width="150px"></td>
    <td>
        <a href="product/sanpham/themgiohang.php?cong=<?php echo $cart_item['id']?>"><i class="fa fa-plus fa-cart"></i></a>
        <?php echo $cart_item['soluong'];?>
        <a href="product/sanpham/themgiohang.php?tru=<?php echo $cart_item['id']?>"><i class="fa fa-minus fa-cart"></i></a>
    </td>
    <td><?php echo number_format($cart_item['giasp'],0,',','.').'vnđ';?></td>
    <td><?php echo number_format($thanhtien,0,',','.').'vnđ';?></td>
    <td><a href="product/sanpham/themgiohang.php?xoa=<?php echo $cart_item['id']?>">Delete </a></td>
  </tr>
  <?php
        }
    ?>
    <tr>
        <td colspan="8"><p style = "float: left;">Total: <?php echo number_format($tongtien,0,',','.').'vnđ';?></p><br>
        <p style = "float: right;"><a href="product/sanpham/themgiohang.php?xoatatca=1"> Delete all</a></p>
            <p><a href="product/sanpham/thanhtoan.php">Order</a></p>
        </td>
    </tr>
<?php
    }else {
  ?>
  <tr>
    <td colspan="8"><p>Currently the cart is empty</p></td>
  </tr>
  <?php
    }
  ?>
</table>
<style>
i.fa.fa-plus.fa-cart{
    font-size: 20px;
    color: black;
}
i.fa.fa-plus.fa-cart:hover{
    color: brown;
}
i.fa.fa-minus.fa-cart{
    font-size: 20px;
    color: black;
    
}
i.fa.fa-minus.fa-cart:hover{
    color: brown;
}
.order{    
    text-align: center;
    font-size: 30px;
    color: blue;
}
</style>