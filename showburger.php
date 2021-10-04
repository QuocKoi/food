<!doctype html>
<?php include("dbconnect.php")?>
<html>
<head>
<meta charset="utf-8">
<title>showburger</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
	<div class="show">
	<div class="row">
		<?php
	$query=" select * from burger";
	$kq= mysql_query($query) or die(error());
	while($bg=mysql_fetch_array($kq))
	{
	?>
  <div   class="column">
	 <a href="chitiet_bg.php?id=<?=$bg['id_burger']?>">
	  
    <img style="width: 250px;height: 250px" src="<?php echo $bg['anh_burger']?>" </im><br>
	 <span><?php echo $bg['ten_burger']?></span><br>
	<button class="button"><i class="far fa-check-circle">Mua Ngay</i></button>
	
  </a>
</div>
	   	 <?php
	  }
	?>
  </div>
		</div>
	

</body>
</html>