<!DOCTYPE html>
<html>
<head>	
<title>Sửa sản phẩm</title>
<meta charset="UTF-8">
</head>
<body>
<?php
session_start();
if(empty($_SESSION['tendangnhap'])){
header("Location:index.html");}

$SP_MA = $_GET['SP_MA'];
require'connect.php';
$con->set_charset("utf8");
$sql = "SELECT * FROM sanpham WHERE (SP_MA='$SP_MA')";
$con->query($sql);
$result = $con->query($sql);
while($row = $result->fetch_assoc()){
	$SP_TEN = $row['SP_TEN'];
    $SP_GIA = $row['SP_GIA'];
    $SP_HDH =     $row['SP_HDH'];
    $SP_CHIP =    $row['SP_CHIP'];
    $SP_RAM =     $row['SP_RAM'];
    $SP_PIN =     $row['SP_PIN'];
    $SP_IMEI =     $row['SP_IMEI'];
    $SP_GIAKHO =     $row['SP_GIAKHO'];
  
}
$con->query($sql);
?>
<h3 align="center" style="color:red">Sửa sản phẩm</h3>
<p align="center">Vui lòng điền đầy thủ thông tin bên dưới để sửa sản phẩm</p>
<table align="center" >
<form action ="fix.php?SP_MA=<?php echo $SP_MA; ?>" method="POST" enctype="multipart/form-data">
<tr>
<td>Tên sản phẩm</td>
<td><input type="text" name="SP_TEN" value="<?php echo $SP_TEN?>"></td>
</tr>
<tr>
</tr>
<tr>
<td>Giá sản phẩm</td>
<td><input type="number" name="SP_GIA" min="0" value="<?php echo $SP_GIA?>"></td>
<td>(VND)</td>
</tr>
<tr>
<tr>
<td>Giá kho</td>
<td><input type="number" name="SP_GIAKHO" min="0" value="<?php echo $SP_GIAKHO?>"></td>
<td>(VND)</td>
</tr>
<tr>
<td>Hệ Điều Hành</td>
<td><input type="text" name="SP_HDH" value="<?php echo $SP_HDH?>"></td>
</tr>
<tr>
</tr>
<tr>
<td>CHIP</td>
<td><input type="text" name="SP_CHIP" value="<?php echo $SP_CHIP?>"></td>
</tr>
<tr>
</tr>
<tr>
<td>RAM</td>
<td><input type="text" name="SP_RAM" value="<?php echo $SP_RAM?>"></td>
</tr>
<tr>
</tr>
<tr>
<td>PIN</td>
<td><input type="text" name="SP_PIN" value="<?php echo $SP_PIN?>"></td>
</tr>
<tr>
</tr>
<tr>
<td>Hình Ảnh</td>
<td><input type="file" name="SP_HINHANH"></td>
</tr>
<tr>
<td>IMEI</td>
<td><input type="text" name="SP_IMEI" value="<?php echo $SP_IMEI?>"></td>
</tr>
<tr>
<td></td><td><input type="submit" value="Lưu sản phẩm"></td><td><input type="reset" value="Làm lại"></td>
</tr>

</table>
<a href="index.php" align="center"> <h1 align="center" style="color: tomato;">TRANG CHỦ</h1></a>
</body>
</html>