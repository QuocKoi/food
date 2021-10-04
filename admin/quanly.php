<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php include("dbconnect.php")?>
	
<title>quản lý</title>
</head>

<body>
	<h2 align="center" style="color: #7C1A1C; font-size: 40px" >Quản Lý Thành Viên</h2>
	<table width="100%" border="1">
  <tbody align="center">
    <tr>
      <td><b style="color:">Id</b></td>
      <td><b>Họ Tên</b></td>
      <td><b>Mật khẩu</b></td>
      <td><b>Thêm</b></td>
      <td><b>Sửa</b></td>
      <td><b>Xóa</b></td>
    </tr>
    <tr>
			<?php
	$query=" select * from login";
	$kq= mysql_query($query) or die(error());
	while($lg=mysql_fetch_array($kq))
	{
		?>
      <td><?php echo $lg['id']?></td>
      <td><?php echo $lg['hoten']?></td>
      <td><?php echo $lg['matkhau']?></td>
      <td><a href="?admin=add"><img src="img/add.png" width="30px"></a></td>
      <td><a href="?admin=edit"><img src="img/edit.png"  width="30px"></a></td>
      <td><a href="?admin=delete"><img src="img/delete.png"  width="30px"></a></td>
   
    </tr>
		 <?php
	}
		?>
  </tbody>
</table>

	
</body>
</html>