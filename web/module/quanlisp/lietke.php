<?php
    $sql_lietke_sp = "SELECT * FROM tbl_sanpham ORDER BY id_sanpham DESC";
    $query_lietke_sp = mysqli_query($conn,$sql_lietke_sp);
?>
<table style="width:100%" border="1", style="border-collapse: collapse;">
    <tr>
        <th>ID</th>
        <th>Product's name</th>
        <th>Product code</th>
        <th>Product price</th>
        <th>Picture</th>
        <th>Amount</th>
        <th>Summary</th>
        <th>Status</th>
        <th>Manager</th>
    </tr>
    <p>List of products</p>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_sp)){
        $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tensanpham'] ?></td>
        <td><?php echo $row['masp'] ?></td>
        <td><img src="module/quanlisp/uploads/<?php echo $row['hinhanh'] ?>" style="width: 150px;"></td>
        <td><?php echo $row['giasp'] ?></td>
        <td><?php echo $row['soluong'] ?></td>
        <td><?php echo $row['tomtat'] ?></td>
        <td><?php if($row['tinhtrang']==1){
            echo 'Activatedt';
        }else{
            echo 'Hidden';
        } ?>
        </td>
        <td>
            <a href="module/quanlisp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>">Delete</a> |
            <a href="?action=quanlisp&query=sua&idsanpham=<?php echo $row['id_sanpham']?>">Repair</a> 
        </td>
    </tr>
    <?php
    }
    ?>
</table>

    