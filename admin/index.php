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
        <a class="nav-link" href="index.php">Trang ch??? <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="danhsachsp.php">Danh s??ch s???n ph???m</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="form_hoadon.php">H??a ????n</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dangxuat.php">????ng xu???t</a>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Th??m
        </a>
       <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="nhasanxuat.html">Th??m nh?? s???n xu???t</a>
          <a class="dropdown-item" href="loaisanpham.html">Th??m lo???i s???n ph???m</a>
          <a class="dropdown-item" href="sanpham.php">Th??m s???n ph???m</a>
          <a class="dropdown-item" href="khachhang.html">Th??m th??ng tin kh??ch h??ng</a>
         
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="nsx.php">C??c nh?? s???n xu???t hi???n c??</a>
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
//B?????c 2: Vi???t c??u SQL
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
// //B?????c 2: Vi???t c??u SQL
// $sql = "SELECT * FROM sanpham";
// //echo $sql;
// $con->query($sql);
// //B?????c 3: Th???c hi???n truy v???n
// $result = $con->query($sql);
// 	while($row = $result->fetch_assoc()){
  
 echo "<a href=''>";
  echo "<div class='card m-3'>";
	echo	"<img src='".$row0['SP_HINHANH']."' class='card-img-top' >";
		echo "<h5 class='card-title'>".$row0['SP_TEN']."</h5>";
    echo "<p class='card-text'>Gi??: ".$row0['SP_GIA']." VN??</p>";
    echo "<p class='card-text'>Dung l?????ng pin: ".$row0['SP_PIN']." </p>";
    echo "<p class='card-text'>CHIP: ".$row0['SP_CHIP']." </p>";
    echo "<p class='card-text'>H??? ??i???u h??nh: ".$row0['SP_HDH']." </p>";
    echo "<p class='card-text'>Ram: ".$row0['SP_RAM']." </p>";
    echo "<p class='card-text'>S??? l?????ng ".$name."  : ".$row1['COUNT(*)']." </p>";
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
            <p class="text-uppercase text-light">TH??NG TIN H??? TR???</p>
            <ul>
                <li><a class="text-light" href="#">Ch??nh s??ch b???o h??nh</a></li>
                <li><a class="text-light" href="#">Ch??nh s??ch b???o h??nh</a></li>
                <li><a class="text-light" href="#">Ch??nh s??ch b???o h??nh</a></li>
                <li><a class="text-light" href="#">Ch??nh s??ch b???o h??nh</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <p class="text-uppercase text-light">th??ng tin li??n l???c</p>
            <ul>
                <li>
                    <a href="tel:+86378693635" class="text-light">S??? ??i???n tho???i: 0567921886</a>
                </li>
                <li>
                    <a href="mailto:tanvirgo238@gmail.com" class="text-light">Email: tanvirgo238@gmail.com</a>
                </li>
            </ul>
        </div>
        <div class="col-md-4">
            <p class="text-uppercase text-light">chi nh??nh</p>
            <ul>
                <li class="text-light">Mi???n b???c
                    <ul>
                        <li><a class="text-light" class="text-light" href="#">382 Nguy???n V??n C???</a></li>
                        <li><a class="text-light" class="text-light" href="#">122 Th??i H??</a></li>
                        <li><a class="text-light" class="text-light" href="#">392 C???u gi???y</a></li>
                        <li><a class="text-light" class="text-light" href="#">28 Tr???n ph?? - H?? ????ng</a></li>
                    </ul>
                </li>
                <li class="text-light">Mi???n trung
                    <ul>
                        <li><a class="text-light" class="text-light" href="#">153-155 Nguy???n V??n Linh-TP ???? N???ng</a>
                        </li>
                        <li><a class="text-light" class="text-light" href="#">151 - 153 H??ng V????ng, TP Tuy H??a, Ph??
                                Y??n</a></li>
                        <li><a class="text-light" class="text-light" href="#">6A L?? H???ng Phong, Ph?????ng 4, ???? L???t</a>
                        </li>
                        <li><a class="text-light" class="text-light" href="#">198 T??n ?????c Th???ng, Ph?? Th???y, Phan
                                Thi???t</a></li>
                    </ul>
                </li>
                <li class="text-light">Mi???n nam
                    <ul>
                        <li><a class="text-light" class="text-light" href="#">621D C??ch M???ng Th??ng 8, Ph?????ng 15 -
                                Qu???n
                                10</a></li>
                        <li><a class="text-light" class="text-light" href="#">436 Quang Trung, Ph?????ng 10, Qu???n G??
                                V???p,
                                TP.HCM</a></li>
                        <li><a class="text-light" class="text-light" href="#">215 L?? V??n Vi???t, ph?????ng Hi???p Ph??, Qu???n
                                9</a></li>
                        <li><a class="text-light" class="text-light" href="#">867 L??y B??n B??ch, P. T??n Th??nh, Q. T??n
                                Ph??, TP.HCM</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </footer>
    </html>