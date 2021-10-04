<meta charset="utf-8">
<?php include("dbconnect.php")?>
<?php
	$ten= $_POST["ten_pizza"];
	$gia= $_POST["gia_pizza"];
    $anh=$_POST["anh_pizza"];
	$result= mysql_query("INSERT INTO login (ten_pizza,gia_pizza,anh_pizza) values ('$ten','$gia','$anh')");
	echo "<script>alert('bạn đã thêm thành công'); location='admin.php?admin=quanly';</script>"
?>