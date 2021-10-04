<meta charset="utf-8">
<?php include("dbconnect.php")?>
<?php
$id= $_GET["id_pizza"];
mysql_query("DELETE FROM pizza WHERE id_pizza='$id'");
echo "<script>alert('bạn đã xoá thành công'); location='admin.php?admin=quanly';</script>"
?>