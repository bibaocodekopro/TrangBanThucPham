<?php 
    include("../../conection.php");
   if (isset($_GET['id'])) {
    $ID_ThanhVien=$_GET['id'];
    $sql="DELETE FROM  thanhvien WHERE ID_ThanhVien='".$ID_ThanhVien."'";
        mysqli_query($mysqli,$sql);
    header('location:../index.php?view=list-user');
    }
?>