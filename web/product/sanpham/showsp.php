<?php
    $sql_pro = "SELECT * from tbl_sanpham  order by id_sanpham DESC";
    $query_pro = mysqli_query($conn, $sql_pro);
?>
<section>
    <?php
        while($row_pro = mysqli_fetch_array($query_pro)){
    ?>
    <article>
         <a href="products.php?action=sanpham&id=<?php echo $row_pro['id_sanpham']?>">
            <figure>
            <img src="module/quanlisp/uploads/<?php echo $row_pro['hinhanh']?>">
            </figure>
            <h1><?php echo $row_pro['tensanpham']?></h1>
            <div class="price"><?php echo number_format($row_pro['giasp'],0,',','.'). 'vnđ'?></div>
                <button>Mua Hàng</button>
        </a>
    </article>
    <?php
        }
    ?>
</section>
<style>
 figure {
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
  width: auto;
  height: 150px;
  margin: 0;
  padding: 0;
}
article .price {
    font-size:25px;
    font-weight: bold;
    color: #27dcc4;
  }
  article h1 {
    font-size: 1.5em;
    color: hotpink;
  }
  article {
    background-color: #262626;
    display: inline-block;
    width: 15%;
    margin: 80px 20px 0 20px;
    border: 2px solid #424242;
    color: #a1a1a1;
  }
</style>
