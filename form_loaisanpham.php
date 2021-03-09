<html>
<head>
<title>xử lí thông tin NSX</title>
</head>
<body>
<?php 
$LOAI_TEN = $_POST['LOAI_TEN'];
echo $LOAI_TEN."<br>";

//Thao tác với CSDL
//Bước 1: Tạo kết nối
require'connect.php';
$con->set_charset("utf8");
//Bước 2: Viết câu SQL
$sql = "INSERT INTO loaisanpham(LOAI_TEN) VALUES('$LOAI_TEN')";
echo $sql;
//Bước 3: Thực hiện truy vấn
$con->query($sql);
echo "Thành công"."<br>";

$con->close();
?>

</body>
</html>