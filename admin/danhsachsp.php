<?php
session_start();
if(empty($_SESSION['tendangnhap'])){
header("Location:dangnhapform.html");}
?>
<!DOCTYPE html>
<html>
<head>
<title>Danh sách sản phẩm</title>
<link rel="stylesheet" type="text/css" href="form.css" media="screen" />

<script>
			function chitiet(str) {
				var ok = true;
				if (str.length == 0) {
					document.getElementById("ten").innerHTML = "";
					return;
				} else {
					var xmlhttp;
					if (window.XMLHttpRequest){
						xmlhttp = new XMLHttpRequest();
					} else {
						xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange = function(){
						if (xmlhttp.readyState == 4 & xmlhttp.status == 200){
							document.getElementById("chitiet").innerHTML = xmlhttp.responseText;
							ok = false;
						}
					}
					xmlhttp.open("GET", "xemchitiet.php?SP_MA=" + str, true);
					xmlhttp.send();
				}
				return ok;
			}
			
		</script>
<style>
.image{
	display: none;
}
.trang:hover > .image{
	position: absolute;
	display: inline-block;
	height: 100px;
	width: 100px;
	z-index: 1;
	border: solid 1px black;
}
</style>
</head>
<body>
<?php
if(empty($_SESSION['tendangnhap'])){
header("Location:login.html");}
$tendangnhap = $_SESSION['tendangnhap'];
echo "<h1 align='center' style='color:red'>Chào bạn $tendangnhap</h1>";
require'connect.php';
$con->set_charset("utf8");


$sql = "SELECT * FROM sanpham";

$con->query($sql);
$result = $con->query($sql);

echo "<table border=1 align='center' style='border-collapse: collapse;'>";
echo "<tr><th>Số thứ tự</th><th>Tên sản phẩm</th><th>Giá sản phẩm</th><th colspan=3>Lựa chọn</th></tr>";


while($row = $result->fetch_assoc()){
echo "<tr> 
<td align='center'>".$row['SP_MA']."</td>
<td class='trang' align='center'>".$row['SP_TEN']."<img class='image' src='".$row['SP_HINHANH']."'width='50%' height='50%'></td>
<td align='center'>".$row['SP_GIA']." VND</td>
<td align='center'><input type =button id=ten onclick='chitiet(".$row['SP_MA'].")' value='Xem chi tiết'></td>
<td align='center'><a href='formsua.php?SP_MA=".$row['SP_MA']."'><img src='../img/edit.png'width='10%' height='10%'></a></td>
<td align='center'><a href='xoa.php?SP_MA=".$row['SP_MA']."'><img src='../img/delete.png'width='10%' height='10%'></a></td>
</tr>";
}
//echo "<tr><td><input type=submit value=Xoa></td></tr>";
echo "</table>";
echo "</form>";
echo "<p id='chitiet'></p>";
$con->close();
?>

<a href="index.php" align="center"> <h1 align="center" style="color: tomato;">TRANG CHỦ</h1></a> 

</body>
</html>