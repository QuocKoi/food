<?php 
	$admin=$_GET["admin"];
	
	switch($admin)
	{
		case "quanly" :
		include ("quanly.php") ;
		break;
		
		case "add" :
		include ("add.php") ;
		break;
		
		case "edit" :
		include ("edit.php") ;
		break;
		
		case "delete" :
		include ("delete.php") ;
		break;
		
/*************************danh muc ********************/		
		case "pizza" :
		include ("pizza.php") ;
		break;
		
		case "edit_pz" :
		include ("edit_pz.php") ;
		break;
		
		case "add_pz" :
		include ("addpizza.php") ;
		break;
		
		case "delete_pz" :
		include ("delete_pizza.php") ;
		break;
		
		
/**********************san pham**********************/		
		case "add_sanpham" :
		include ("add_sanpham.php") ;
		break;
		case "xoa_sp" :
		include ("xoa_sp.php") ;
		break;
/*************************Thoi su******/		
		case "add_ts" :
		include ("add_ts.php") ;
		break;
		
		case "xoa_ts" :
		include ("xoa_ts.php") ;
		break;
		
		
		
		case "upload" :
		include ("upload.php") ;
		break;
	}
	
?>