<p>Chi tiết sản phẩm</p>
<?php
        $sql_chitiet = "SELECT * from tbl_sanpham  where id_sanpham='$_GET[id]' limit 1";
        $query_chitiet = mysqli_query($conn, $sql_chitiet);
        while($row_chitiet=mysqli_fetch_array($query_chitiet)){
?>
<div class="wrapper_chitiet"></div>
<div class="hinhanh_sanpham">
<figure>
<img width="50%"src="module/quanlisp/uploads/<?php echo $row_chitiet['hinhanh']?>">
</figure>
</div>
<form action="product/sanpham/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham']?>" method="POST">
<div class="chitiet_sanpham">
            <h3> Ten san pham: <?php echo $row_chitiet['tensanpham']?></h3>
            <p>Ma sp: <?php echo $row_chitiet['masp']?></p>
            <p>Gia sp: <?php echo number_format($row_chitiet['giasp'],0,',','.'). 'vnđ'?></p>
            <p>So luong : <?php echo $row_chitiet['soluong']?></p>
            <p>So luong : <?php echo $row_chitiet['soluong']?></p>
            <p><input type="submit" value="Order" name="themgiohang" class="order"></p>
</div>
</form>
<?php
        }
?>
<style>
 .wrapper_chitiet{
    height: auto;
    width: 90%;
    margin: 0 auto;
}
.hinhanh_sanpham{
    border: 1px solid #ddd cover;
    float: left;
    width: 20%;
}
.chitiet_sanpham{
    float: left;
    width: 40%;
    margin:0 10px;

}
input.order{
    border: none;
    background: brown;
    color: #fff;
    padding: 12px;
    font-size: 15px;
    cursor: pointer;

}
/* figure {
  position: relative;
}
 
figure:before,
figure:after {
  content: '';
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  position: absolute;
}
 
img {
  width: 30%;
  height: 10%;
  margin: 0;
  padding: 0;
} */
</style>