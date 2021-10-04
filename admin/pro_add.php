<meta charset="utf-8">
<?php include("dbconnect.php")?>
<?php
	$hoten= $_POST["hoten"];
	$matkhau= md5($_POST["matkhau"]);
	$result= mysql_query("INSERT INTO login (hoten,matkhau) values ('$hoten','$matkhau')");
	echo "<script>alert('bạn đã thêm thành công'); location='admin.php?admin=quanly';</script>"
?>