<html>
<head>
<title>xử lí thông tin NSX</title>
</head>
<body>
<?php 
$NSX_TEN = $_POST['NSX_TEN'];
echo $NSX_TEN."<br>";
$NSX_DIACHI = $_POST['NSX_DIACHI'];
echo $NSX_DIACHI."<br>";

//Thao tác với CSDL
//Bước 1: Tạo kết nối
require'connect.php';
$con->set_charset("utf8");
//Bước 2: Viết câu SQL
$sql = "INSERT INTO nhasanxuat(NSX_TEN, NSX_DIACHI) VALUES('$NSX_TEN', '$NSX_DIACHI')";
echo $sql;
//Bước 3: Thực hiện truy vấn
$con->query($sql);
echo "Thành công"."<br>";

$con->close();
?>

</body>
</html>