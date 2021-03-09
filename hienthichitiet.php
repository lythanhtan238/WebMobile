<!DOCTYPE html>
<html>
<head>	
<title>Chi tiết sản phẩm</title>
<meta charset="UTF-8">
</head>
<body>
<?php

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
    $SP_HINHANH =     $row['SP_HINHANH'];
    $SP_IMEI =     $row['SP_IMEI'];
  
}
$con->query($sql);
?>
<h3 align="center" style="color:red">Chi tiết sản phẩm</h3>
<table align="center" >
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
<td>IMEI</td>
<td><input type="text" name="SP_IMEI" value="<?php echo $SP_IMEI?>"></td>
</tr>


</table>
<img src="./img/<?php echo $SP_HINHANH?>">
<a href="index.php" align="center"> <h1 align="center" style="color: tomato;">TRANG CHỦ</h1></a>
</body>
</html>