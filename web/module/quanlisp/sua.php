<?php
    $sql_sua_sp = "SELECT * FROM tbl_sanpham where id_sanpham='$_GET[idsanpham]' limit 1";
    $query_sua_sp = mysqli_query($conn,$sql_sua_sp);
?>
<p> Repair product </p>
<table border ="1" width="100%" style="border-collapase:collapse;">
<?php
    while($row = mysqli_fetch_array($query_sua_sp)){
?>
    <form method="POST" action="module/quanlisp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>" enctype="multipart/form-data">
        <tr>
            <td>Product's name</td>
            <td><input type ="text" value = "<?php echo $row['tensanpham'] ?>" name="tensanpham"></td>
        </tr>
        <tr>
            <td>Product code</td>
            <td><input type ="text" value = "<?php echo $row['masp']?>" name="masp"></td>
        </tr>
        <tr>
            <td>Product price</td>
            <td><input type ="text" value= "<?php echo $row['giasp']?>" name="giasp"></td>
        </tr>
        <tr>
            <td>Amount</td> 
            <td><input type ="text"  value = "<?php echo $row['soluong']?>" name="soluong"></td>
        </tr>
        <tr>
            <td>Picture</td>
            <td>
                <input type ="file" name="hinhanh">
                <img src="module/quanlisp/uploads/<?php echo $row['hinhanh'] ?>" style="width: 150px;">
             </td>
        </tr>
        <tr>
            <td>Summary</td>    
            <td><textarea name="tomtat" rows="10"  style="resize: none"><?php echo $row['tomtat']?> </textarea></td>
        </tr>
        <tr>
            <td>Content</td>
            <td><textarea name="noidung" rows="10"  style="resize: none"><?php echo $row['noidung']?> </textarea></td>
        </tr>
        <tr>
            <td>Status</td> 
            <td>
                    <select name="tinhtrang" >
                        <?php
                            if($row['tinhtrang']==1){
                        ?>
                        <option value="1" selected > Activated</option>
                        <option value="0"> Hidden</option>
                        <?php
                            }else{
                        ?>
                        <option value="1">  Activated</option>
                        <option value="0" selected > Hidden</option>
                        <?php
                            }
                        ?>

                    </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="suasanpham" value="Repair products"> </td>
        </tr>
    </form>
    <?php
    }
    ?>
    </table>