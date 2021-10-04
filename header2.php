<!doctype html>
<?php include("dbconnect.php")?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<title>Head</title>
</head>

<body>
	<div id="wrapper">
		
	  <header>
		  <div id=logo1 class="container">
					
							<a href="https://www.facebook.com/VietnamPizzaHut"><i class="fab fa-facebook-f"></i></a>
							<a href="https://www.instagram.com/pizzahutvietnam/"><i class="fab fa-instagram"></i></a>
							<a href="https://twitter.com/pizzahut"><i class="fab fa-twitter"></i></a>
					
		</div>
			<div class="inner-header container">
				<a href="?go=home" class="logo"><img src="images/logo2/logo.png" width="316" height="79"></a>
				<nav>
						<ul id="main-menu">
							<li><a href="?go=home">Trang Chủ</a></li>
							<li><a href="">Tin Tức</a></li>
							<li><a href="gioithieu.php">Giới Thiệu</a></li>
							<li><a href="lienhe.php">Liên Hệ</a></li>
							<li><a href=""><i class="fas fa-cart-arrow-down"></i></a></li>
						</ul>
				</nav>
			</div>
		  	<div class="container inner-header2" >
		  		<nav>
					<ul id="main-menu2">
						<li><a href="?go=pizza"><img src="images/logo/pizza.png"><p>Pizza</p></a></li>
						<li><a href="?go=burger"><img src="images/logo/burger.png"><p>Burger</p></a></li>
						<li><a href="?go=salad"><img src="images/logo/salad.png"><p>Salad</p></a></li>
						<li><a href="?go=taco"><img src="images/logo/taco.png"><p>Tacos</p></a></li>
						<li><a href="?go=wrap"><img src="images/logo/wrap.png"><p>Wraps</p></a></li>
						<li><a href="?go=fries"><img src="images/logo/fries.png"><p>Fries</p></a></li>
						<li><a href="?go=drink"><img src="images/logo/drink.png"><p>Drinks</p></a></li>
						
					
					</ul>
				</nav>
		  	</div>
			
		</header>

			
			
			</div>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script>
		$(document).ready(function(){
			$(window).scroll(function(){
				if($(this).scrollTop()){
					$('header').addClass('sticky');
				}else{$('header').removeClass('sticky');}
			});
		});
	</script>

</body>
</html>