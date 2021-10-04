<!DOCTYPE html>
<?php include("dbconnect.php")?>
<html lang="en">
<head>
<title>Fries</title>
<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<style>
* {
  box-sizing: border-box;
}

/* Style the header */


/* Create two columns/boxes that floats next to each other */
.slidenav nav {
  float: left;
  width: 25%;
  height: 100%; /* only for demonstration, should be removed */
 
  padding: 20px;
}
	.slidenav nav span { font-size: 25px;
					}
	.slidenav li{
		
		padding: 10px ;
		border-bottom: 1px #585858 solid;
		display: flex;
		justify-content: space-between;
	}
	.slidenav .triangle-right:hover{
		opacity: 1;
	}
	.slidenav a{
		color: #FFFFFF;
		width: 200px;

	}
	.slidenav a:hover{
		background:#7B2324;
		text-transform: uppercase;
	}
	
	.slidenav img{
		width: 30px;
		margin-right: 10px
	}
/* Style the list inside the menu */
.slidenav ul {
  list-style-type: none;
	 background:#323232;
}

article {
  float: left;
  padding: 20px 0px;
  width: 75%;
  height: 100%;
	background: none;/* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}
	section{padding-top: 40px ;
	
	}

/* Style the footer */


/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  .slidenav nav, article {
    width: 100%;
    height: auto;
  }
}
.triangle-right {
	border-top: 15px solid transparent;
	border-left: 20px solid #7B2324 ;
	border-bottom: 15px solid transparent;

}
	#giamgia{
		display: flex;
		width: 240px;
		
	}
	#giamgia img{
		width: 100px;
		height: 50pxpx;
	}
	#giamgia p{
		color:#8A3E40;
		position: 20px 20px;
	}
	#giamgia a:hover{background: none;}
	#giamgia ul{
		background: none;
	}
	#giamgia li{
		width: 150px;
	}
</style>
</head>
<body>

<?php include("slidepasta.php")?>
<section class="container" >
	<div class="slidenav">
  <nav>
    <ul>
		<li><a href="?go=pizza"><img src="images/logo/pizza.png">Pizza</a><div class="triangle-right"></div></li>
      <li><a href="?go=burger"><img src="images/logo/burger.png">Burger</a><div class="triangle-right"></div></li>
      <li><a href="?go=salad"><img src="images/logo/salad.png">Salad</a><div class="triangle-right"></div></li>
      <li><a href="?go=taco"><img src="images/logo/taco.png">Taco</a><div class="triangle-right"></div></li>
      <li><a href="?go=wrap"><img src="images/logo/wrap.png">Wrap</a><div class="triangle-right"></div></li>
      <li><a href="?go=fries"><img src="images/logo/fries.png">Fries</a><div class="triangle-right"></div></li>
      <li><a href="?go=drink"><img src="images/logo/drink.png">Drinks</a><div class="triangle-right"></div></li>
    </ul>
	  <div id="search"><form>
  				<input type="text" name="search" placeholder="Search..">
	  </form>
	  </div>
	  <span>Đang Giảm Giá</span>
	  
	  <div id="giamgia">

		   <ul>
		<li><a href="#"><img src="images/pizza/Pepperoni Pizza.jpg"><p>Pepperoni Pizza</p></a></li>
      <li><a href="#"><img src="images/pizza/Trio Cheese.jpg"><p>Trio Cheese</p></a></li>
      <li><a href="#"><img src="images/pizza/Apricot Chicken.jpg"><p>Apricot Chicken</p></a></li>
      <li><a href="#"><img src="images/pizza/Italiano Original.jpg"><p>Italiano Original</p></a></li>
	  </div>
			  </nav>
		
		</div>
		
  
  <article>
	  <?php include("showfries.php")?>

  </article>
</section>



</body>
</html>
