<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thêm Pizza</title>
</head>

<body>
	<h1 align="center" style="color: #0982C5">Cập Nhât Thông Tin Sản Phẩm</h1>
	<form style="text-align: center" action="pro_add_pizza.php"  method="post">
		<table width="100%" >
  <tbody>
	  
    <tr>
      <td>Tên Sản Phẩm<br><input type="text" name="ten_pizza" id="ten_pizza"></td>
    </tr>
	   <tr>
      <td>Nhập Giá<br><input type="text" name="gia_pizza"></td>
    </tr>
    <tr>
      <td>Ảnh<br><input type="file" name="anh_pizza"></td>
    </tr>
   
  
 
  </tbody>
</table>
  
   <input type="submit" value="Thêm">
	  
	<input type="reset" name="Hủy">
    
	
	</form>
</body>
</html>