<html>
<head>
<title>Nhà sản xuất</title>
</head>
<body>
<?php 

//Thao tác với CSDL
//Bước 1: Tạo kết nối
require'connect.php';
$con->set_charset("utf8");
//Bước 2: Viết câu SQL
$sql = "SELECT * FROM nhasanxuat";
#echo $sql;
//Bước 3: Thực hiện truy vấn
$con->query($sql);
$result = $con->query($sql);
while($row = $result->fetch_assoc()){
echo "
	<ul>
	<li>Tên nhà sản xuất: ".$row['NSX_TEN']."</li>
	<li>Địa chỉ nhà sản xuất:".$row['NSX_DIACHI']."</li>
	</ul>";

}
$con->close();
?>
<a href="index.php" align="center"> <h1 align="center" style="color: tomato;">TRANG CHỦ</h1></a>
</body>
</html>