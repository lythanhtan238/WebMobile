<html>
<head>
<title>xử lí thông tin sản phẩm</title>
</head>
<body>
<?php 
$SP_TEN = $_POST['SP_TEN'];
echo $SP_TEN."<br>";
$SP_HDH = $_POST['SP_HDH'];
echo $SP_HDH."<br>";
$SP_CHIP = $_POST['SP_CHIP'];
echo $SP_CHIP."<br>";
$SP_RAM = $_POST['SP_RAM'];
echo $SP_RAM."<br>";
$SP_PIN = $_POST['SP_PIN'];
echo $SP_PIN."<br>";
$SP_GIA = $_POST['SP_GIA'];
echo $SP_GIA."<br>";

$_FILES['SP_HINH']['name']; //ten file
$_FILES['SP_HINH']['tmp_name'];// noi dung file
$duongdan="./img/".$_FILES['SP_HINH']['name']; 
move_uploaded_file($_FILES['SP_HINH']['tmp_name'],$duongdan);

//Thao tác với CSDL
//Bước 1: Tạo kết nối
require'connect.php';
$con->set_charset("utf8");
//Bước 2: Viết câu SQL
$sql = "INSERT INTO sanpham(SP_TEN, SP_HDH, SP_CHIP, SP_RAM,SP_PIN,SP_GIA,SP_HINHANH) VALUES('$SP_TEN', '$SP_HDH', '$SP_CHIP', '$SP_RAM', '$SP_PIN', '$SP_GIA' , '$duongdan')";
echo $sql;
//Bước 3: Thực hiện truy vấn
$con->query($sql);
echo "Đăng kí thành công"."<br>";
//echo "<a href='dangnhapform.html'>Đăng nhập tại đây</a>";
$con->close();
?>

</body>
</html>