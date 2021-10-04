<!doctype html>
<?php include("dbconnect.php")?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="style.css">
</link>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<title>home</title>
</head>

<body>
	<div><?php include("quangcao.php")?></div>
	
	<div id=banner>
	<?php include("slide.php")?>
	</div>
	<div id="Qc container">
		<?php include("g.php")?>
	</div>

	
	<div class="inner-banner">
		<img src="images/background/1.png">
		<div id=list3>
			<a href=""><button class="button">Đặt Ngay</button></a>
		</div>
	</div>
		<div class="bestseller container">
		<h2>Bán Chạy Nhất</h2>
		<div id="row">
		  <div id="column" >
			<a href=""><img src="images/pizza/Pepperoni Pizza.jpg">
				<p>Pepperoni Pizza</p>
				<br>
				<button class="button"><i class="far fa-check-circle">Mua Ngay</i></button>
			</a>
		  </div>
		  <div id="column">
			<a href=""><img src="images/pizza/Trio Cheese.jpg">
			 	<p>Trio Cheese</p>
				<br>
				<button class="button"><i class="far fa-check-circle">Mua Ngay</i></button>
			</a>
		  </div>
		  <div id="column" >
			<a href=""><img src="images/pizza/Apricot Chicken.jpg">
				<p>Apricot Chicken</p>
				<br>
				<button class="button"><i class="far fa-check-circle">Mua Ngay</i></button>
			</a>
		  </div>
		  <div id="column" >
			<a href=""><img src="images/pizza/Italiano Original.jpg">
				<p>Italiano Original</p>
				<br>
				<button class="button"><i class="far fa-check-circle">Mua Ngay</i></button>
			</a>
		  </div>
			</div>
	
	</div>
	<div class="inner-banner2">
		<img src="images/background/9.png">
	</div>
	<div class="icon-home container">
		<ul>
			<li><img src="images/logo/1.png" </li>
				<p>Chất Lượng Tốt Nhất</p>
				<span>PizzaHut là công ty chuyên cung cấp Pizza hàng đầu</span>
			<li><img src="images/logo/2.png" </li>
				<p>Giao Hàng Nhanh Nhất</p>
				<span>PizzaHut là công ty chuyên cung cấp Pizza hàng đầu</span>
				
			<li><img src="images/logo/3.png" </li>
				<p>Đầu Bếp Nổi Tiếng</p>
				<span>PizzaHut là công ty chuyên cung cấp Pizza hàng đầu</span>
			<li><img src="images/logo/4.png" </li>
				<p>Công Thức Lâu Đời</p>
				<span>PizzaHut là công ty chuyên cung cấp Pizza hàng đầu</span>
		
		</ul>
	</div>
	
	
</body>
</html>