

<html>

    <head>
        <meta charset="utf-8">
        <title>Administrator</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./css/home.css">
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
  <a class="navbar-brand" href="index.php">ThanhTan Mobile</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Trang chủ <span class="sr-only">(current)</span></a>
      </li>
  

    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2"id="searchField" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div style="background-image: url('./back1.jpg');">
  <div id='productTableContainer'>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-50" src="./img/mi.png" alt="Mi">
    </div>
    <div class="carousel-item">
      <img class="d-block w-50" src="./img/samsung.png" alt="SamSung">
    </div>
    <div class="carousel-item">
      <img class="d-block w-50" src="./img/Apple.png" alt="Apple">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <div class="card-group">
      
      <?php   
          //$i=1;
          require'connect.php';
          $con->set_charset("utf8");
          //Bước 2: Viết câu SQL
          $sql = "SELECT * FROM sanpham";
          //echo $sql;
          $con->query($sql);
          //Bước 3: Thực hiện truy vấn
          $result = $con->query($sql);
          while($row = $result->fetch_assoc()){
      ?>
        <a href="hienthichitiet.php?SP_MA=<?php echo $row['SP_MA']?>">
      <div class="card">
          <img src="./img/<?php echo $row['SP_HINHANH']?>" class="card-img-top" >
          <div class="card-body">
            <div class="left">
              <h5 class="card-title"><?php echo $row['SP_TEN']?></h5>
              <p class="card-text"><?php echo $row['SP_GIA']?> VNĐ</p>
            </div>
            <div class="right">
              <button type="button" class="btn btn-primary reserve-btn" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $row['SP_MA']?>">Đặt</button>
            </div>  
          </div>
      </div>
          </a>
      <?php
          //$i++;
        }
      ?>

    </div>
    </a>
  </div>
</div>


  <?php   

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      //$i=1;
      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $ma_sp = $_POST['ma_sp'];

      require'connect.php';
      $con->set_charset("utf8");
      //Bước 2: Viết câu SQL
      $sql = "INSERT INTO khachhang(KH_TEN, KH_SDT, KH_DIACHI, KH_EMAIL) VALUES('$name', '$phone', '$address', '$email')";
      //echo $sql;
      if ($con->query($sql) === TRUE) {
        $kh_id = $con->insert_id;
        $sql1 = "INSERT INTO hoadonxuat(KH_MA) VALUES('$kh_id')";
        if ($con->query($sql1) === TRUE) {
          $hdx_id = $con->insert_id;
          $sql2 = "INSERT INTO hdx_sp(HDX_MA, SP_MA) VALUES('$hdx_id', '$ma_sp')";
          $con->query($sql2);
        }
        $title = "Đặt sản phẩm thành công";
        $color = "bg-success";
      } else {
        $title = "Đặt sản phẩm thất bại";
        $color = "bg-danger";
      }

      echo "<div class='modal fade' id='ackExampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog' role='document'>
          <div class='modal-content'>
            <div class='modal-header $color'>
              <h5 class='modal-title' id='ackExampleModalLabel'>$title</h5>
              <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>
          </div>
        </div>
      </div>";

    }
  ?>
      <!-- Modal -->

  <!-- <div class="anh"> <img src="../img/2.jpg" > </div> -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">THÔNG TIN ĐẶT HÀNG</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action='' method='post'>
        <div class="modal-body">
            <input type="hidden" id="ma_sp" name="ma_sp" value="">
            <div class="form-group">
              <label for="name" class="col-form-label">Họ tên:</label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
              <label for="phone" class="col-form-label">Số ĐT:</label>
              <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="form-group">
              <label for="email" class="col-form-label">Email:</label>
              <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="address" class="col-form-label">Địa chỉ:</label>
              <textarea class="form-control" id="address" name="address"></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <button class="btn btn-primary">Đặt</button>
        </div>
        </form>
      </div>
    </div>
  </div>

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

      $(function() {
        $('#exampleModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var ma_sp = button.data('whatever') // Extract info from data-* attributes
          var modal = $(this)
          modal.find('#ma_sp').val(ma_sp)
        })

        $('.reserve-btn').click(function(event) {
          event.preventDefault()
        })
        
        $('#ackExampleModal').modal()
      })
			
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