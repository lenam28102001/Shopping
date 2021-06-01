<?php
    include('../../config.php');
    $tensanpham=$_POST['tensanpham'];
    $masp=$_POST['masp'];
    $giasp=$_POST['giasp'];
    $soluong=$_POST['soluong'];
    $tomtat=$_POST['tomtat'];
    $noidung=$_POST['noidung'];
    $tinhtrang=$_POST['tinhtrang'];
    $hinhanh=$_FILES['hinhanh']['name'];
    $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];

    if(isset($_POST['themsanpham'])){
        $sql_them="INSERT into tbl_sanpham(tensanpham,masp,giasp,soluong,hinhanh,tomtat,noidung,tinhtrang) values('$tensanpham','$masp','$giasp','$soluong','$hinhanh','$tomtat','$noidung','$tinhtrang')";
        mysqli_query($conn,$sql_them);
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        header("location: ../../quanlisanpham.php?action=quanlisp&query=them");
    }elseif(isset($_POST['suasanpham'])){
        if($hinhanh!=''){
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        $sql= "SELECT * FROM tbl_sanpham where id_sanpham='$_GET[idsanpham]' LIMIT 1";
        $query = mysqli_query($conn,$sql);
        while($row= mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_update = "UPDATE tbl_sanpham SET tensanpham='".$tensanpham."',masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',hinhanh='".$hinhanh."' where id_sanpham='$_GET[idsanpham]'";
        }else{
            $sql_update = "UPDATE tbl_sanpham SET tensanpham='$tensanpham',masp='$masp',giasp='$giasp',soluong='$soluong',tomtat='$tomtat',noidung='$noidung',tinhtrang='$tinhtrang' where id_sanpham='$_GET[idsanpham]'";
        }
        mysqli_query($conn,$sql_update); 
        header("location: ../../quanlisanpham.php?action=quanlisp&query=them");
    }else{
        $id = $_GET['idsanpham'];
        $sql= "SELECT * FROM tbl_sanpham where id_sanpham='$id' LIMIT 1";
        $query = mysqli_query($conn,$sql);
        while($row= mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
        $sql_xoa= "DELETE FROM tbl_sanpham where id_sanpham = '$id'";
        mysqli_query($conn,$sql_xoa);
        header("location: ../../quanlisanpham.php?action=quanlisp&query=them");
    }
?>