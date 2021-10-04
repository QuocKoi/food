<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<?php include("dbconnect.php")?>
<title>add</title>
</head>

<body style="text-align: center" >
	<h2>Thêm Thành Viên</h2>
	<form action="pro_add.php" method="post">
	<table align="center" width="311" border="1">
  <tbody>
    <tr>
      <td width="148" align="center">Tên Đăng Nhập</td>
      <td width="147"><input type="text" name="hoten" id="hoten"></td>
    </tr>
    <tr>
      <td align="center">Mật Khẩu</td>
      <td><input type="text" name="matkhau" id="matkhau"></td>
    </tr>
	  
  </tbody>
</table>
			<input type="submit" name="submit" id="submit" value="Thêm" >
	<input type="reset" name="reset"  value="Hủy" >
	</form>

	
</body>
</html>