<?php 
require'connect.php';
?>
<html>
<head>
    <title>Sản Phẩm</title>
    <meta charset="utf-8">

</head>

<body>
    <h1 align="center" style="color: tomato;">Nhập thông tin sản phẩm</h1>

    <table border="1" align="center" cellspacing="15">
        <td style="background-color: wheat;">
            <table border="0" cellspacing="15">
                <form action="form_sanpham.php" method="POST" enctype="multipart/form-data">

                    <tr>
                        <td width="300"></td>
                    </tr>
                    <tr>
                        <td>Tên sản phẩm:</td>
                        <td><input type="text" name="SP_TEN"></td>
                    </tr>
                    <tr>
                        <td width="50"></td>

                    </tr>
                    <tr>
                        <td>Hệ điều hành: </td>
                        <td><input type="text" name="SP_HDH"></td>
                    </tr>
                    <tr>
                        <td>CHIP: </td>
                        <td><input type="text" name="SP_CHIP"></td>
                    </tr>
                    <tr>
                        <td>RAM: </td>
                        <td><input type="text" name="SP_RAM"></td>
                    </tr>
                    <tr>
                        <td>PIN: </td>
                        <td><input type="text" name="SP_PIN"></td>
                    </tr>
                    <tr>
                        <td>Giá: </td>
                        <td><input type="number" name="SP_GIA" min="0"></td>
                    </tr>
                    <tr>
                        <td>Giá kho: </td>
                        <td><input type="number" name="SP_GIAKHO" min="0"></td>
                    </tr>
                    <tr>
                        <td>Hình ảnh sản phẩm: </td>
                        <td><input id="hinh" type="file" name="SP_HINH"></td>
                    </tr>
                    <tr>
                        <td>Nhà sản xuất: </td>
                        <td><select name='NSX_TEN'>
                        <?php
                            $sql = "SELECT * FROM nhasanxuat";
                            echo $sql;
                            $con->query($sql);
                            $result = $con->query($sql);
                            while($row = $result->fetch_assoc()){
                                echo "<option value=".$row['NSX_MA'].">".$row['NSX_TEN']."</option>";
                                }
                            
                            ?>

                            </select></td>
                    </tr>
                    
                    
                    <tr>
                        <td>Loại sản phẩm: </td>
                        <td><select name="LOAI_SP">
                        <?php
                            $sql = "SELECT * FROM loaisanpham";
                            echo $sql;
                            $con->query($sql);
                            $result = $con->query($sql);
                            while($row = $result->fetch_assoc()){
                                echo "<option value=".$row['LOAI_MA'].">".$row['LOAI_TEN']."</option>";
                                }
                            $con->close();
                            ?>

                            </select></td>
                    </tr>
                    <tr>
                    <td>IMEI: </td>
                    <td><input type="text" name="SP_IMEI"></td>
                    </tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" value="Đăng kí">
                        <input type="reset" value="Thay thế">
                    </td>
                    </tr>
                    </tr>
                </form>
            </table>
        </td>
    </table>
    <a href="index.php" align="center"> <h1 align="center" style="color: tomato;">TRANG CHỦ</h1></a>
</body>

</html>