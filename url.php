
<?php 

	switch($_GET['go'])
	{
		case "home" :
		include ("home.php") ;
		break;
			
		case "pizza" :
		include("pizza.php") ;
		break;
		
		
		case "burger" :
		include ("burger.php") ;
		break;
			
		case "salad" :
		include ("salad.php") ;
		break;
		
			case "taco" :
		include ("taco.php") ;
		break;
			
			case "wrap" :
		include ("wrap.php") ;
		break;
			
			case "fries" :
		include ("fries.php") ;
		break;
			
			case "drink" :
		include ("drink.php") ;
		break;
			
		default:
			
			include ("home.php") ;
	
	}
	
?>
