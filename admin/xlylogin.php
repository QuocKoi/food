<?php
$admin_hoten = "admin"; //tên đăng nhập
$admin_matkhau = "admin"; //mật khẩu đăng nhập
$hoten = $_POST["hoten"];
$matkhau = $_POST["matkhau"];
if($hoten == $admin_hoten AND $matkhau == $admin_matkhau){
   Setcookie("hoten","$hoten", time()+9000);
    header("location: admin.php");
}
else
{
    echo("<script>alert('Sai tên đăng nhập hoặc mật khẩu.!!!');location='index.php';</script>");
}
?>