<html>
<head>
<title>Xem chi tiết sản phẩm</title>
<style>
a {   text-decoration: none;
      text-align: center;
      background-color: gray;
      color: white;
      padding: 0 10px; }
</style>
</head>
<?php
$SP_MA = $_GET['SP_MA'];
//echo $idsp;
require'connect.php';
$con->set_charset("utf8");
$sql = "SELECT * FROM sanpham WHERE SP_MA='$SP_MA'";
$con->query($sql);
$result = $con->query($sql);

while($row = $result->fetch_assoc()){
	echo "<ul>
	<li>Hinh ảnh sản phẩm:<img src='".$row['SP_HINHANH']."'width='30%' height='30%'> </li>
	<li>Mã sản phẩm: ".$row['SP_MA']."</li>
	<li>Tên sản phẩm: ".$row['SP_TEN']." </li>
	<li>Hệ điều hành: ".$row['SP_HDH']."</li>
    <li>Giá sản phẩm:".$row['SP_GIA']." (VND) </li>
    <li>Giá kho:".$row['SP_GIAKHO']." (VND) </li>
    <li>Pin:".$row['SP_PIN']." </li>
    <li>RAM:".$row['SP_RAM']." </li>
    <li>IMEI:".$row['SP_IMEI']." </li>
    

	</ul>";
}

$con->close();

?>
</html>