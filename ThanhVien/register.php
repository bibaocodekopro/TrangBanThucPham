<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8>
  <title>Đăng kí</title>
  <link href="register.css" rel="stylesheet">
  <link rel="stylesheet"  href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet"  href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet"  href="../bootstrap/js/bootstrap.bundle.js">
  <link rel="stylesheet"  href="../bootstrap/js/bootstrap.bundle.min.js">
  <link rel="stylesheet"  href="register.css">
  <link rel="stylesheet"  href="../style.css">
  <link rel="shortcut icon" href="https://img.icons8.com/cotton/2x/laptop--v3.png" type="image/png">

</head>
<body>
  
  <div class="container">
    <nav class="navbar navbar-expand-lg header-custom sticky-top">
      <div class="container-fluid font-header-custom">
      <a class="navbar-branch" href="../index.php">
        <img src="../image/logotan.png" height="60">
      </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           <li class="nav-item">
            <a class="nav-link active"  href="login.php">ĐĂNG NHẬP</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <form action="register_submit.php" method="POST">
    <h5>ĐĂNG KÍ</h5  >
    <hr>
    <label for="text"><b>Họ và Tên</b></label>
    <input type="text" name="fullname" required>
    <label for="text"><b>Địa Chỉ</b></label>
    <input type="text" name="address" required>
      <label for="text"><b>Email</b></label>
    <input type="text" name="email" required>
    <label for="text"><b>Số Điện thoại</b></label>
    <input type="text" name="phonenumber" required>
    <label for="text"><b>Tên tài khoản</b></label>
    <input type="text" name="username" required>
    <label for="password"><b>Mật khẩu</b></label>
    <input type="password" name="password" required>
    <label for="password-repeat"><b>Nhập lại mật khẩu</b></label>
    <input type="password" name="password-repeat" required>     
    <div class="clearfix">
     <button type="submit" class="signupbtn" name="submit">Đăng kí</button>
     
   </form>
 </div>
</div>

</body>
</html>
