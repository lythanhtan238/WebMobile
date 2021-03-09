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

$SP_GIAKHO = $_POST['SP_GIAKHO'];
echo $SP_GIAKHO."<br>";

$_FILES['SP_HINH']['name']; //ten file
$_FILES['SP_HINH']['tmp_name'];// noi dung file
$duongdan="../img/".$_FILES['SP_HINH']['name']; 
move_uploaded_file($_FILES['SP_HINH']['tmp_name'],$duongdan);

$NSX_MA = $_POST['NSX_TEN'];
$LOAI_MA = $_POST['LOAI_SP'];

$SP_IMEI = $_POST['SP_IMEI'];
echo $SP_IMEI."<br>";


//Thao tác với CSDL
//Bước 1: Tạo kết nối
require'connect.php';
$con->set_charset("utf8");
//Bước 2: Viết câu SQL
$sql = "INSERT INTO sanpham(SP_TEN, SP_HDH, SP_CHIP, SP_RAM,SP_PIN,SP_GIA,SP_GIAKHO,SP_HINHANH,NSX_MA,LOAI_MA,SP_IMEI) VALUES('$SP_TEN', '$SP_HDH', '$SP_CHIP', '$SP_RAM', '$SP_PIN', '$SP_GIA' , '$SP_GIAKHO', '$duongdan','$NSX_MA','$LOAI_MA','$SP_IMEI')";
echo $sql;
//Bước 3: Thực hiện truy vấn
$con->query($sql);
echo "Đăng kí thành công"."<br>";
echo "<a href='index.php'>quay trờ lại trang chủ</a>";
//echo "<a href='dangnhapform.html'>Đăng nhập tại đây</a>";
$con->close();
?>

</body>
</html>