<html>
<?php session_start();?>
<head>
</head>
<body>
<?php
$tendangnhap=$_POST['tendangnhap'];

$matkhau=$_POST['matkhau'];

require'connect.php';
$con->set_charset("utf8");

$sql = "SELECT * FROM admin WHERE username='$tendangnhap' AND password='$matkhau'";
$con->query($sql);
$result = $con->query($sql);


if($result->num_rows>0){
	$_SESSION['tendangnhap'] = $_POST['tendangnhap'];
	header("location:index.php");
}else {
	header("location:login.html");
$con->close();
}
?>
</body>
</html>