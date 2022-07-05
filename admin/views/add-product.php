<?php 
$sql_DanhMuc="SELECT * FROM danhmuc ORDER BY ID_DanhMuc DESC";
$query_DanhMuc=mysqli_query($mysqli,$sql_DanhMuc);

$sql_NCC="SELECT * FROM nhacungcap ORDER BY ID_NCC DESC";
$query_NCC=mysqli_query($mysqli,$sql_NCC);


if (isset($_POST['submit'])) {
    $TenSanPham = $_POST['TenSanPham'];
$GiaBan = $_POST['GiaBan'];
$SoLuong = $_POST['SoLuong'];
$MoTa = $_POST['MoTa'];
$Img = $_POST['Img'];
$ID_DanhMuc = $_POST['danhmuc'];
$ID_NCC = $_POST['nhacungcap'];
$BanChay='ko';
  $sql_add = "INSERT INTO sanpham(ID_DanhMuc,ID_NhaCungCap,TenSanPham,MoTa,GiaBan,SoLuong,Img,BanChay) VALUES('".$ID_DanhMuc."','".$ID_NCC."','".$TenSanPham."','".$MoTa."','".$GiaBan."','".$SoLuong."','".$Img."','".$BanChay."')";
  mysqli_query($mysqli,$sql_add);
}
?>

<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Thêm sản phẩm
        </div>
        <div class="card-body">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="name">Tên sản phẩm</label>
                            <input class="form-control" type="text" name="TenSanPham" id="name">
                        </div>
                        <div class="form-group">
                            <label for="name">Giá</label>
                            <input class="form-control" type="text" name="GiaBan" id="name">
                        </div>
                        <div class="form-group">
                            <label for="name">Số lượng</label>
                            <input class="form-control" type="text" name="SoLuong" id="name">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="intro">Mô tả sản phẩm</label>
                            <textarea name="MoTa" class="form-control" id="intro" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Hình ảnh</label>
                    <input class="form-control" type="file" name="Img" value="<?php echo $row['Img'];?>">
                </div>
                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select class="form-control" name="danhmuc">
                        <option>Chọn danh mục</option>
                        <?php while ($row_DanhMuc=mysqli_fetch_array($query_DanhMuc)){
                        ?>
                        <option value="<?php echo $row_DanhMuc['ID_DanhMuc']?>" name="ID_DanhMuc"><?php echo $row_DanhMuc['TenDanhMuc']?></option>
                    <?php }?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Nhà cung cấp</label>
                    <select class="form-control" name="nhacungcap">
                        <option>Chọn nhà cung cấp</option>
                        <?php while ($row_NCC=mysqli_fetch_array($query_NCC)){
                        ?>
                        <option value="<?php echo $row_NCC['ID_NCC']?>" name="ID_NCC"><?php echo $row_NCC['TenNCC']?></option>
                    <?php }?>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary"  value="Thêm mới" name="submit">
            </form>
        </div>
    </div>
</div>