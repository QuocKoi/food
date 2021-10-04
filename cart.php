<?php  session_start() ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<style>
		.cart{
			width: 100%;
			height: 100%;
			border: 1px #6C6A6A solid;
		}
	</style>
<title>cart</title>
</head>

<body>
		<?php 
		include("dbconnect.php");
		if(!isset($_SESSION["cart"])){
			$_SESSION["cart"]= array();
		}
	
		if(isset($_GET['action'])){
			switch($_GET['action']){
				case "add":
					break;
					}
				
					
			}

			if(!empty($_SESSION["cart"])){
					var_dump($_SESSION["cart"]);exit;
			}
		
		?>	
  
	<div class="cart container">
		<b>Trang Chủ</b>
	 	<h1>Giỏ Hàng</h1>
		<form id="cart-form" action="cart.php?action=submit" method="post">
	<table width="100%" border="1">
  <tbody>
    <tr>
      <th>STT</th>
      <th>Tên Sản Phẩm </th>
      <th>Ảnh Sản Phẩm</th>
      <th>Đơn Giá</th>
      <th>Số Lượng</th>
      <th>Thành Tiền</th>
      <th>Xóa</th>
    </tr>
	  
	  
      <tr>
      <td>1</td>
      <td>Apricot Chicken</td>
      <td> <img src="images/pizza/Apricot Chicken.jpg" width="100px"</td>
      <td>25000đ</td>
      <td><input type="text" value="" name="quantity[1]" size="3"></td>
      <td>250000đ</td>
      <td>Xóa</td>
    </tr>
	   <tr>
      <td>&nbsp;</td>
      <td>Tổng Tiền</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>Thành Tiền</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
	<div id="form-button">
		<input type="submit" name="update_click" value="Cập Nhật"/>
	
	</div>
			<form>
	<div> <label>Người Nhận:</label>
	  <input type="text" value="" name="name"/>
	</div>
	<div> <label>Điện Thoại:</label><input type="text" value="" name="phone"/></div>
	<div> <label>Địa Chỉ:</label><input type="text" value="" name="address"/></div>
	<div> <label>Ghi Chú:</label> <textarea name="note" cols="50" rows="7"></textarea></div>
	<input type="submit" name="order_click" value="Đặt Hàng" />
		</form>

</body>
</html>