
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

$search_pattern = $_GET["searchPattern"];
//echo $search_pattern;
require'connect.php';
$con->set_charset("utf8");
?>
<div class="card-group">
  
<?php   
    //$i=1;
    require'connect.php';
$con->set_charset("utf8");
//Bước 2: Viết câu SQL
$sql = "SELECT * FROM sanpham WHERE  SP_TEN LIKE". "'%$search_pattern%'";
//echo $sql;
$con->query($sql);
//Bước 3: Thực hiện truy vấn
$result = $con->query($sql);
	while($row = $result->fetch_assoc()){
  ?>
  <a href="">
 <div class="card">
		<img src="./img/<?php echo $row['SP_HINHANH']?>" class="card-img-top" >
		<h5 class="card-title"><?php echo $row['SP_TEN']?></h5>
    <p class="card-text"><?php echo $row['SP_GIA']?> VNĐ</p>
    </div>

  <?php
    //$i++;
	}
  ?>
 </div>
 </a>

</body>
</html>