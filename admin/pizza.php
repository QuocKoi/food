<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php include("dbconnect.php")?>
	
<title>quản lý</title>
</head>

<body>
	<h2 align="center" style="color: #7C1A1C; font-size: 40px" >Quản Lý Pizza</h2>
	<table width="100%" border="1">
  <tbody align="center">
    <tr>
      <td><b style="color:">Id</b></td>
      <td><b>Tên Pizza</b></td>
		<td><b>Giá</b></td>
      <td><b>Ảnh</b></td>
      <td><b>Thêm</b></td>
      <td><b>Sửa</b></td>
      <td><b>Xóa</b></td>
	 
    </tr>
    <tr>
			<?php
	$query=" select * from pizza";
	$kq= mysql_query($query) or die(error());
	while($pz=mysql_fetch_array($kq))
	{
		?>
      <td><?php echo $pz['id_pizza']?></td>
      <td><?php echo $pz['ten_pizza']?></td>
	   <td><?php echo $pz['gia_pizza']?></td>
      <td><?php echo $pz['anh_pizza']?></td>
      <td><a href="?admin=add_pz"><img src="img/add.png" width="30px"></a></td>
      <td><a href=""><img src="img/edit.png"  width="30px"></a></td>
      <td><a href="?admin=delete_pz"><img src="img/delete.png"  width="30px"></a></td>
   
    </tr>
		 <?php
	}
		?>
  </tbody>
</table>

	
</body>
</html>