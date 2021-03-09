<html>
<head>
<title>xử lí thông tin khách hàng</title>
</head>
<body>
<?php 
$KM_TEN = $_POST['KM_TEN'];
echo $KM_TEN."<br>";
$KM_NGAYKETTHUC = $_POST['KM_NGAYKETTHUC'];
echo $KM_NGAYKETTHUC."<br>";


//Thao tác với CSDL
//Bước 1: Tạo kết nối
require'connect.php';
$con->set_charset("utf8");
//Bước 2: Viết câu SQL
$sql = "INSERT INTO khuyenmai(KM_TEN, KM_NGAYKETTHUC) VALUES('$KM_TEN', '$KM_NGAYKETTHUC')";
echo $sql;
//Bước 3: Thực hiện truy vấn
$con->query($sql);
echo "Nhập thành công!"."<br>";

$con->close();
?>

</body>
</html>