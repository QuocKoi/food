<meta charset="utf-8">
<?php include("dbconnect.php")?>
<?php
$id= $_GET["id"];
mysql_query("DELETE FROM login WHERE id='$id'");
echo "<script>alert('bạn đã xoá thành công'); location='admin.php?admin=quanly';</script>"
?>