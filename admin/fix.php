<?php
session_start();
$SP_MA = $_GET['SP_MA'];


$tendangnhap = $_SESSION['tendangnhap'];
echo $tendangnhap." Đã chỉnh sửa thành công một sản phẩm"."<br>";
echo "<a href='index.php'>quay trờ lại trang chủ</a>";
$SP_TEN = $_POST['SP_TEN'];
$SP_GIA = $_POST['SP_GIA'];
$SP_HDH = $_POST['SP_HDH'];
$SP_CHIP = $_POST['SP_CHIP'];
$SP_RAM = $_POST['SP_RAM'];
$SP_PIN = $_POST['SP_PIN'];
$SP_GIAKHO = $_POST['SP_GIAKHO'];
$SP_IMEI = $_POST['SP_IMEI'];
$_FILES['SP_HINHANH']['name']; //ten file
$_FILES['SP_HINHANH']['tmp_name'];// noi dung file
$duongdan="../img/".$_FILES['SP_HINHANH']['name']; 
move_uploaded_file($_FILES['SP_HINHANH']['tmp_name'],$duongdan);
require'connect.php';
$con->set_charset("utf8");
$sql = "UPDATE sanpham
SET SP_TEN='$SP_TEN' , SP_GIA='$SP_GIA', SP_HINHANH='$duongdan', SP_HDH='$SP_HDH', SP_RAM='$SP_RAM',SP_CHIP='$SP_CHIP',SP_PIN='$SP_PIN',SP_GIAKHO ='$SP_GIAKHO',SP_IMEI='$SP_IMEI'
WHERE SP_MA=$SP_MA";
echo $sql;
$con->query($sql); 



$con->close();
?>