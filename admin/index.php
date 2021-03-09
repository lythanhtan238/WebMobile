<?php
session_start();
if(isset($_SESSION['tendangnhap'])){
$tendangnhap = $_SESSION['tendangnhap'];
#echo "<h1 align='center' style='color:red'>$tendangnhap</h1>";
} else{
	header("location:login.html");
}
?>

<html>

    <head>
        <meta charset="utf-8">
        <title>Administrator</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>



    <body>
   <style>
          
img.anh {
    vertical-align: middle;
    border-style: none;
    width: 100vw;
    height: 60vh;
    object-fit: cover;
}

.card img {
  width: 20vw;
object-fit: contain;
}

</style>

       <!--<div><img src="../img/admin.jpg" style="display:block; margin:aguto; width:100vw; heiht:10vh"></div> -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ThanhTan Mobile</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Trang chủ <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="danhsachsp.php">Danh sách sản phẩm</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form_hoadon.php">Hóa đơn</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dangxuat.php">Đăng xuất</a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Thêm
        </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="nhasanxuat.html">Thêm nhà sản xuất</a>
          <a class="dropdown-item" href="loaisanpham.html">Thêm loại sản phẩm</a>
          <a class="dropdown-item" href="sanpham.php">Thêm sản phẩm</a>
          <a class="dropdown-item" href="khachhang.html">Thêm thông tin khách hàng</a>
         
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="nsx.php">Các nhà sản xuất hiện có</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>

    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2"id="searchField" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div id='productTableContainer'>

<div class="card-group">
  
<?php   
    //$i=1;
    require'connect.php';
    
$con->set_charset("utf8");
//Bước 2: Viết câu SQL
$sql = "SELECT DISTINCT SP_TEN FROM sanpham";
//echo $sql;
$result = $con->query($sql);
while($row = $result->fetch_assoc()){
  $name =  $row['SP_TEN'];
  $sql = "SELECT * FROM sanpham where sp_ten='$name'";
  $result0 = $con->query($sql);
  $row0 = $result0->fetch_assoc();

  $sql = "SELECT COUNT(*)  FROM sanpham  WHERE (SP_TEN='$name')";
  //echo $sql;
  $result1 = $con->query($sql);
  $row1 = $result1->fetch_assoc();
  
 // echo $row1['COUNT(*)'];
  


// }

// $con->set_charset("utf8");
// //Bước 2: Viết câu SQL
// $sql = "SELECT * FROM sanpham";
// //echo $sql;
// $con->query($sql);
// //Bước 3: Thực hiện truy vấn
// $result = $con->query($sql);
// 	while($row = $result->fetch_assoc()){
  
 echo "<a href=''>";
  echo "<div class='card m-3'>";
	echo	"<img src='".$row0['SP_HINHANH']."' class='card-img-top' >";
		echo "<h5 class='card-title'>".$row0['SP_TEN']."</h5>";
    echo "<p class='card-text'>Giá: ".$row0['SP_GIA']." VNĐ</p>";
    echo "<p class='card-text'>Dung lượng pin: ".$row0['SP_PIN']." </p>";
    echo "<p class='card-text'>CHIP: ".$row0['SP_CHIP']." </p>";
    echo "<p class='card-text'>Hệ điều hành: ".$row0['SP_HDH']." </p>";
    echo "<p class='card-text'>Ram: ".$row0['SP_RAM']." </p>";
    echo "<p class='card-text'>Số lượng ".$name."  : ".$row1['COUNT(*)']." </p>";
    echo "</div>";

  
    //$i++;
	}
  ?>
 </div>
 </a>
</div>
      <!-- <div class="anh"> <img src="../img/2.jpg" > </div> -->
    </body>
    
    <script>
			document.getElementById("searchField").addEventListener("keyup", function() {
            let searchPattern = this.value;
            let xmlhttp = {};
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if(this.readyState == 4 && this.status == 200) {
                    let response = xmlhttp.responseText;
                    // console.log("res:", response);
                    document.getElementById("productTableContainer").innerHTML = response;   
                }
            }

            xmlhttp.open("GET", "./timkiem.php?searchPattern="+searchPattern, true);
            xmlhttp.send();
        });
			
    </script>
    <footer class="row bg-dark w-100 mx-0">
        <div class="col-md-4">
            <p class="text-uppercase text-light">THÔNG TIN HỖ TRỢ</p>
            <ul>
                <li><a class="text-light" href="#">Chính sách bảo hành</a></li>
                <li><a class="text-light" href="#">Chính sách bảo hành</a></li>
                <li><a class="text-light" href="#">Chính sách bảo hành</a></li>
                <li><a class="text-light" href="#">Chính sách bảo hành</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <p class="text-uppercase text-light">thông tin liên lạc</p>
            <ul>
                <li>
                    <a href="tel:+86378693635" class="text-light">Số điện thoại: 0567921886</a>
                </li>
                <li>
                    <a href="mailto:tanvirgo238@gmail.com" class="text-light">Email: tanvirgo238@gmail.com</a>
                </li>
            </ul>
        </div>
        <div class="col-md-4">
            <p class="text-uppercase text-light">chi nhánh</p>
            <ul>
                <li class="text-light">Miền bắc
                    <ul>
                        <li><a class="text-light" class="text-light" href="#">382 Nguyễn Văn Cừ</a></li>
                        <li><a class="text-light" class="text-light" href="#">122 Thái Hà</a></li>
                        <li><a class="text-light" class="text-light" href="#">392 Cầu giấy</a></li>
                        <li><a class="text-light" class="text-light" href="#">28 Trần phú - Hà đông</a></li>
                    </ul>
                </li>
                <li class="text-light">Miền trung
                    <ul>
                        <li><a class="text-light" class="text-light" href="#">153-155 Nguyễn Văn Linh-TP Đà Nẵng</a>
                        </li>
                        <li><a class="text-light" class="text-light" href="#">151 - 153 Hùng Vương, TP Tuy Hòa, Phú
                                Yên</a></li>
                        <li><a class="text-light" class="text-light" href="#">6A Lê Hồng Phong, Phường 4, Đà Lạt</a>
                        </li>
                        <li><a class="text-light" class="text-light" href="#">198 Tôn Đức Thắng, Phú Thủy, Phan
                                Thiết</a></li>
                    </ul>
                </li>
                <li class="text-light">Miền nam
                    <ul>
                        <li><a class="text-light" class="text-light" href="#">621D Cách Mạng Tháng 8, Phường 15 -
                                Quận
                                10</a></li>
                        <li><a class="text-light" class="text-light" href="#">436 Quang Trung, Phường 10, Quận Gò
                                Vấp,
                                TP.HCM</a></li>
                        <li><a class="text-light" class="text-light" href="#">215 Lê Văn Việt, phường Hiệp Phú, Quận
                                9</a></li>
                        <li><a class="text-light" class="text-light" href="#">867 Lũy Bán Bích, P. Tân Thành, Q. Tân
                                Phú, TP.HCM</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </footer>
    </html>