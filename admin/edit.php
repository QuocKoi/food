<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<?php include("dbconnect.php")?>
<title>Edit</title>
</head>
<?php 
	$id=$_GET["id"];
	$query="SELECT * FROM login where id='$id'";
	$result=mysql_query($query) or die(mysql_error());
	$rowedit = mysql_fetch_array($result);
	?>
<body style="text-align: center" >
	<h2>Sửa Thông Tin</h2>
	<form action="pro_edit.php" method="post">
		<p>Tên Người Dùng:<input type="text" name="hoten" value="<?php echo $rowedit['hoten']?>"></p>
		<p>Mật Khẩu:<input type="text" name="matkhau" value="<?php echo $rowedit['matkhau']?>"></p>
			<input type="submit" name="submit" id="submit" value="sửa" >
	<input type="reset" name="reset" id="reset" value="Hủy" >
	</form>

	
</body>
</html>