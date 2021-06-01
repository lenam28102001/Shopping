
<p> Add product </p>
<table border ="1" width="100%" style="border-collapase:collapse;">
    <form method="POST" action="module/quanlisp/xuly.php" enctype="multipart/form-data">
        <tr>
            <td>Product's name</td>
            <td><input type ="text" name="tensanpham"></td>
        </tr>
        <tr>
            <td>Product code</td>
            <td><input type ="text" name="masp"></td>
        </tr>
        <tr>
            <td>Product price</td>
            <td><input type ="text" name="giasp"></td>
        </tr>
        <tr>
            <td>Amount</td>
            <td><input type ="text" name="soluong"></td>
        </tr>
        <tr>
            <td>Picture</td>
            <td><input type ="file" name="hinhanh"></td>
        </tr>
        <tr>
            <td>Summary</td>
            <td><textarea name="tomtat" rows="10"  style="resize: none" ></textarea></td>
        </tr>
        <tr>
            <td>Content</td>
            <td><textarea name="noidung" rows="10"  style="resize: none"></textarea></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>
                    <select name="tinhtrang" >
                        <option value="1"> Activated</option>
                        <option value="0">Hidden</option>
                    </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="themsanpham" value="Them san pham"> </td>
        </tr>
    </form>
