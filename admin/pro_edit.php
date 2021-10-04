<meta charset="utf-8">
<?php include("dbconnect.php")?>
<?php
	$id=$_GET["id"];
	$hotenmoi= $_POST["hoten"];
	$matkhaumoi= $_POST["matkhau"];
	$result= mysql_query("UPDATE login SET hoten='".$hotenmoi."', matkhau='".$matkhaumoi."' where id='$id'"); 
	echo "<script>alert('bạn đã sửa thành công'); location='admin.php?admin=quanly';</script>"
?>