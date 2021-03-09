<!DOCTYPE html>
<html>

<?php   
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      require'connect.php';
      $con->set_charset("utf8");
      if ( isset($_POST['type']) && $_POST['type'] == 'purchase') {
        $hdx_id = $_POST['hdx_id'];
        $sql1 = "UPDATE hoadonxuat SET HDX_TRANGTHAI = 1 WHERE HDX_MA = '$hdx_id'";
        $con->query($sql1);
      } else {
        //$i=1;
        $ma_kh = $_POST['ma_kh'];
        $dssp = $_POST['dssp'];
        $sp_ids = explode(",", $dssp);
        require'connect.php';
        $sql1 = "INSERT INTO hoadonxuat(KH_MA) VALUES('$ma_kh')";
        if ($con->query($sql1) === TRUE) {
          $hdx_id = $con->insert_id;
          foreach ($sp_ids as $idsp) {
            $sql2 = "INSERT INTO hdx_sp(HDX_MA, SP_MA) VALUES('$hdx_id', '$idsp')";
            $con->query($sql2);
          }        
        }

      }
    }
  ?>

<head>
    <title>Hóa đơn</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/hoadon.css">
</head>

<body>
  <div class="container">
    <div class="left">
      <h1 align="center" style="color: tomato;">Nhập thông tin hóa đơn</h1>
      <table border="1" cellspacing="15">
        <td style="background-color: wheat;">
          <table border="0" cellspacing="15">
            <form action="form_hoadon.php" method="post">
              <tr>
                  <td width="300"></td>
              </tr>
              <tr>
                  <td width="30%">Khách hàng:</td>
                  <td>
                    <select id="ma_kh" name="ma_kh" searchable="Search here..">
                      <option value="" disabled selected>Chọn khách hàng</option>
                      <?php 
                        //Thao tác với CSDL
                        //Bước 1: Tạo kết nối
                        require'connect.php';
                        $con->set_charset("utf8");
                        //Bước 2: Viết câu SQL
                        $sql = "SELECT * FROM khachhang;";
                        //Bước 3: Thực hiện truy vấn
                        $result = $con->query($sql);
                        while($row = $result->fetch_assoc()){
                          $ma = $row['KH_MA'];
                          $ten = $row['KH_TEN'];
                          echo "<option value='$ma'>$ten (MKH: $ma)</option>";
                        }
                      ?>
                    </select>
                  </td>
              </tr>
              <tr>
                  <td width="50"></td>
              </tr>
              <tr>
                  <td>Thêm sản phẩm:</td>
                  <td>
                    <select id="select-sanpham" searchable="Search here..">
                      <option value="" disabled selected>Chọn sản phẩm</option>
                      <?php 
                        //Thao tác với CSDL
                        //Bước 1: Tạo kết nối
                        require'connect.php';
                        $con->set_charset("utf8");
                        //Bước 2: Viết câu SQL
                        $sql = "SELECT * FROM sanpham;";
                        //Bước 3: Thực hiện truy vấn
                        $result = $con->query($sql);
                        while($row = $result->fetch_assoc()){
                          $ma = $row['SP_MA'];
                          $ten = $row['SP_TEN'];
                          $imei = $row['SP_IMEI'];
                          $gia = $row['SP_GIA'];
                          echo "<option value='$ma' imei='$imei' ten='$ten' gia='$gia'>$ten (MSP: $ma)</option>";
                        }
                      ?>
                    </select>
                    <button id="btn-add-sp" type="button">Thêm</button>
                  </td>
              </tr>
              <tr>
                <td>
                  Các sản phẩm mua:
                </td>
                <td>
                  
                </td>
              </tr>

              <tr>
                <td colspan="2">
                  <table style="width:100%; border-collapse: collapse;" border="1">
                  <thead>
                    <tr>
                      <th>IMEI</th>
                      <th>Tên điện thoại</th>
                      <th>Giá</th>
                    </tr>
                  </thead>

                  <tbody id='list-sp'>
                    
                  </tbody>
                    
                  </table>
                </td>
              </tr>

              <tr>
                <td>
                </td>
                <td>
                    <input id='dssp' type="text" style='display: none;' name='dssp'>
                    <input type="submit" value="Tạo hóa đơn">
                    <input type="reset" value="Nhập lại">
                </td>
              </tr>
            </form>
          </table>
        </td>
      </table>
    </div> <!--Left-->

    <div class="right">
      <h1 align="center" style="color: tomato;">Danh sách hóa đơn chưa thanh toán</h1>
      <div style="padding: 20px;" >
        <div style="width:100%; height:70vh; overflow:auto;">
          <table style="width:100%; border-collapse: collapse;" border="1">
            <tr>
              <th>SHĐ</th>
              <th>Ngày lập</th>
              <th>Tổng tiền</th>
              <th>Thao tác</th>
            </tr>

          <?php
            $sql = "SELECT * FROM hoadonxuat WHERE HDX_TRANGTHAI = 0;";
            //Bước 3: Thực hiện truy vấn
            $result = $con->query($sql);
            while($row = $result->fetch_assoc()){
              $ma = $row['HDX_MA'];
              $ngaylap = $row['HDX_NGAYLAP'];
              $sql1 = "SELECT * FROM hdx_sp WHERE HDX_MA = '$ma';";
              $result1 = $con->query($sql1);
              $sum = 0;
              while($row1 = $result1->fetch_assoc()){
                $masp = $row1['SP_MA'];
                $sql2 = "SELECT * FROM sanpham WHERE SP_MA = '$masp';";
                $result2 = $con->query($sql2);
                $sp = $result2->fetch_assoc();
                $sum += $sp['SP_GIA'];
              }
              echo "<tr>
                <td>$ma</td>
                <td>$ngaylap</td>
                <td>$sum</td>
                <td>
                  <form action='' method='POST'>
                    <input type='hidden' name='type' value='purchase'>
                    <input type='hidden' name='hdx_id' value='$ma'>
                    <button type='submit'>Thanh toán</button>
                  </form>    
                </td>
              </tr>";
            }
            
            $con->close();
          ?>
          
        </table>
        </div>
        
      </div>
      
      
    </div> <!--Right-->
  </div> <!--Container-->
  

  
  <a href="index.php" align="center"> <h1 align="center" style="color: tomato;">TRANG CHỦ</h1></a>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>
    var dssp = []
    $(function() {
      $('#btn-add-sp').click(function(event) {
        event.preventDefault();
        let option = $('#select-sanpham option:selected');
        if (option.attr('value') == "") return;
        let id = option.attr('value');
        let imei = option.attr('imei');
        let ten = option.attr('ten');
        let gia = option.attr('gia');
        dssp.push(id)
        $('#dssp').val(dssp.join());
        $('#list-sp').append(
          `<tr>
            <td>${imei}</td>
            <td>${ten}</td>
            <td>${gia}</td>
          </tr>`);
      })

      $('input[type="reset"]').click(function() {
        $('#dssp').empty()
        $('#dssp').append("<tr><th>IMEI</th><th>Tên điện thoại</th><th>Giá</th></tr>")
      })
    })

    
  </script>
</body>

<!-- <tr>
  <td>${imei}</td>
  <td>${ten}</td>
  <td>${gia}</td>
  <input style='display: none;' type='text' name='dssp[]' value='${id}'>
</tr> -->

</html>