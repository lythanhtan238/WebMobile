<html>
<head>
<title>xử lí thông tin khách hàng</title>
</head>
<body>
<?php 
$KH_TEN = $_POST['KH_TEN'];
echo $KH_TEN."<br>";
$KH_SDT = $_POST['KH_SDT'];
echo $KH_SDT."<br>";
$KH_DIACHI = $_POST['KH_DIACHI'];
echo $KH_DIACHI."<br>";
$KH_EMAIL = $_POST['KH_EMAIL'];
echo $KH_EMAIL."<br>";


//Thao tác với CSDL
//Bước 1: Tạo kết nối
require'connect.php';
$con->set_charset("utf8");
//Bước 2: Viết câu SQL
$sql = "INSERT INTO khachhang(KH_TEN, KH_SDT, KH_DIACHI, KH_EMAIL) VALUES('$KH_TEN', '$KH_SDT', '$KH_DIACHI', '$KH_EMAIL')";
echo $sql;
//Bước 3: Thực hiện truy vấn
$con->query($sql);
echo "Đăng kí thành công"."<br>";
echo "<a href='index.php'>Đăng nhập tại đây</a>";

$con->close();
?>

</body>
</html>