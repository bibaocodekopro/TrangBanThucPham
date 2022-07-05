<?php
include("../conection.php");
session_start();
if (isset($_GET['id'])) {
  $ID_ThanhVien=$_GET['id'];
}
$sql_Cus="SELECT * FROM thanhvien WHERE ID_ThanhVien = $ID_ThanhVien LIMIT 1";
$query_Cus=mysqli_query($mysqli,$sql_Cus);
$row=mysqli_fetch_array($query_Cus);
?>
<?php
if(isset($_GET['id'])){
  $ID_ThanhVien = $_GET['id'];
}else {
  echo "Empty query!";
  exit;
}
if(!isset($ID_ThanhVien)){
  echo "Empty isbn! check again!";
  exit;
}


if(isset($_POST['sua']) &&  $_POST['HoVaTen'] != "" && $_POST['Email'] != ""  && $_POST['SoDienThoai'] != "" && $_POST['DiaChi'] != "" ){
  $HoVaTen = $_POST['HoVaTen'];
  $Email = $_POST['Email'];
  $SoDienThoai = $_POST['SoDienThoai'];
  $DiaChi=$_POST['DiaChi'];
  $partten = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
  if (!preg_match ("/^[0-9]*$/", $phonenumber) )
   echo "Số điện thoại không hợp lệ.";
 else {
  $sql_add = "UPDATE thanhvien set HoVaTen='".$HoVaTen."',Email='".$Email."', DiaChi = '".$DiaChi."',  SoDienThoai = '".$SoDienThoai."' WHERE ID_ThanhVien= '$_GET[id]'";
  mysqli_query($mysqli,$sql_add);
  header("location:logout.php");
}
}
?>

<!DOCTYPE html >
<html style="scroll-behavior: smooth">
<head>
  <meta charset=utf-8>
  <title>Sản phẩm</title>
  <link rel="stylesheet"  href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet"  href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet"  href="../bootstrap/js/bootstrap.bundle.js">
  <link rel="stylesheet"  href="../bootstrap/js/bootstrap.bundle.min.js">
  <link rel="stylesheet"  href="../style.css">
  <link rel="stylesheet"  href="../themify-icons/themify-icons.css">
  <link rel="shortcut icon" href="https://img.icons8.com/cotton/2x/laptop--v3.png" type="../image/png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <style type="">
    .divider-text {
      position: relative;
      text-align: center;
      margin-top: 15px;
      margin-bottom: 15px;
    }
    .divider-text span {
      padding: 7px;
      font-size: 12px;
      position: relative;   
      z-index: 2;
    }
    .divider-text:after {
      content: "";
      position: absolute;
      width: 100%;
      border-bottom: 1px solid #ddd;
      top: 55%;
      left: 0;
      z-index: 1;
    }

    .btn-facebook {
      background-color: #405D9D;
      color: #fff;
    }
    .btn-twitter {
      background-color: #42AEEC;
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="sticky-top">
    <div class="menu sticky-top">
      <nav class="navbar navbar-expand-lg header-custom"  style="background-color: #248A32;">
        <div class="container-fluid font-header-custom">
          <a class="navbar-branch" href="../index.php">
            <img src="../image/logo/logochinh.png" height="80">
          </a>
          <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active"  href="index.php" style="color:white;">TẤT CẢ SẢN PHẨM</a>
              </li>

              <!-- Search -->
              

              <li class="nav-item">
                <a class="nav-link" href="../cart" style="color:white;">GIỎ HÀNG</a>
              </li>
              <?php if(isset($_SESSION['TenDangNhap'])) { ?>
                <li class="nav-item">
                  <a class="nav-link" href="../contact.php?id=<?php echo $_SESSION['ID_ThanhVien']?>" style="color:white;">LIÊN HỆ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../ThanhVien/logout.php" style="color:white;">ĐĂNG XUẤT</a>
                </li>
                <li class="nav-item">
                  <a type="button" class="btn btn-secondary" href="../ThanhVien/profile.php?id=<?php echo $_SESSION['ID_ThanhVien']?>" id="btn" style="color:white;"></span> <?php echo $_SESSION['HoVaTen']?></a>
                </li>
              <?php } else {?>
                <li><a type="button" class="btn btn-secondary" href="../ThanhVien/login.php">&nbsp;ĐĂNG NHẬP  </a></li>
              <?php }?>
            </ul>
            <?php
            if (isset($_SESSION['cart'])) {
              ?>
              <h5></h5>
              <?php
            }
            ?>
          </div>
        </div>
      </nav>
    </div>

    <div class="container">
      <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
          <h4 class="card-title mt-3 text-center">Thông tin cá nhân</h4>
          <form action="" method="POST">
            <div class="form-group input-group">
              <span class="input-group-text"> <i class="fa fa-user"></i> </span>
              <input name="HoVaTen" class="form-control" value="<?php echo$row['HoVaTen'] ?>">
            </div>
            <div class="form-group input-group">
              <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
              <input name="Email" class="form-control"  value="<?php echo$row['Email'] ?>">
            </div>
            <div class="form-group input-group">
              <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
              <input name="SoDienThoai" class="form-control"  value="<?php echo$row['SoDienThoai'] ?>">
            </div> 
            <div class="form-group input-group">
              <span class="input-group-text"> <i class="fa fa-building"></i> </span>
              <input name="DiaChi" class="form-control" placeholder="Phone number" type="text" value="<?php echo$row['DiaChi'] ?>">
            </div>
          </br>
          <div class="form-group">
            <p>Sau khi nhấn nút sửa bạn sẽ đăng nhập lại.</br> Bạn Có chắc chứ?</p>
            <input type="submit" class="btn btn-primary btn-block" name="sua" value="Sửa">
          </div>                                                           
        </form>
      </article>
    </div>
  </div>
  <hr class="hr--large">
  <div class = "space" style="text-align: center; background-color: #white ">
    <ul style="list-style: none" class="no-bullets social-icons">
      <li style="text-align: center">
        <a class = "ti-facebook"style=" color: black" href="https://www.facebook.com/b1231121" title="Code from BiBao" >
          Facebook
        </a>
        <a class = "ti-pinterest"style=" color: black" href="https://www.pinterest.com" title="Pinterest">
          Pinterest
        </a>
        <a class = "ti-instagram"style=" color: black" href="https://www.instagram.com/bibaoo/" title="Instagram">
          Instagram
        </a>
      </li>
    </ul>
    <p class="site-footer__copyright-content">
      © 2021, 
      <a href="http://localhost/BanThucPham/index.php" \title=""style=" color: red" >Nhóm 10</a>
    </div>  
  </div>      
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>