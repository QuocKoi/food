<?php  session_start() ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<style>
		#direction{
	display: flex;
	padding: 50px px;
	border-bottom: 1px #B1B1B1 solid;
width: 100%;
height: 100px;}
#direction p{
	padding: 40px 20px;
	
}
		img{
			width: 100%
			
		}
		.chitiet{
			padding: 50px 0px;
		}
		#inner-chitiet{
			padding-bottom: 100px;
			padding-left: 50px;
		}
		#inner-chitiet .button{
	padding:15px 70px;
	border-radius: 10px;
	background-color: #720D0F;
	border: none;
	color: white;
	text-decoration:none;
	margin: 3px 2px;
	cursor: pointer;
	display: inline-block;
	display: block;
	
}
		#inner-chitiet select{
	padding:15px 30px;
	background-color: #2F2F2F;
	border-color: #A38F08;
	color: white;
	text-decoration:none;
	margin: 2px 2px;
	cursor: pointer;
	display: inline-block;
	display: block;
		}
		#quantity{
			padding:10px 10px;
	background-color: #2F2F2F;
	border:none;
	color: white;
	text-decoration:none;
	margin: 3px 2px;
	cursor: pointer;
	display: inline-block;
	display: block;
		}
		#demo{
			font-size: 20px;
		}
		.chitiet a{ color: aliceblue;}
	</style>
<title>chi tiết sản phẩm</title>
</head>

<body>
	<?php
	include("dbconnect.php");
	$result=mysql_query("SELECT * FROM `drink` WHERE `id_drink`=".$_GET['id']);
	$product=mysql_fetch_assoc($result);
	?>
	<?php include("header1.php")?>
	<div class="chitiet container">
		<div id="direction">
			<a href="index.php"><p>Home</p></a>
			<p>></p>
			<p>Drink</p>
			<p>></p>
			<p><?=$product['ten_drink']?></p>
		</div>
		<table width="100%" height="600px">
  <tbody>
    <tr>
      <td width="450px">
		<img src="<?=$product['anh_drink']?>">
		</td>
      <td id="inner-chitiet" width="550px">
		<h1><?=$product['ten_drink']?></h1>
		<p>Thực đơn PizzaHut đa dạng và phong phú, có rất nhiều sự lựa chọn cho bạn, gia đình và bạn bè.</p>
		<br>
		  <form  action="cart.php?action=submit" method="post">
			<p>Số Lượng:</p>
			<input type="text" id="quantity" value="1" name="quantity[<?=$product['id_drink']?>]"size="2">
			
			<p>Giá:</p>
			<p id="demo" ><?=$product['gia_drink']?>đ</p>
		  <br>
		  <p><button class="button">Đặt Ngay</button></p>
		  </form>
		</td>
    </tr>
  </tbody>
</table>

		
		</div>
	<?php include("footer.php")?>
</body>
</html>