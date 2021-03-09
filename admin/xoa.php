<?php
$SP_MA = $_GET['SP_MA'];

require'connect.php';
$con->set_charset("utf8");
$sql = "DELETE FROM sanpham WHERE SP_MA=$SP_MA";

$con->query($sql);
$con->close();
echo "xóa thành công"."<br>";
echo "<a href='danhsachsp.php'>xem lại danh sách sản phẩm tại đây</a>";
?>