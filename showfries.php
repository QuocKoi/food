<!doctype html>
<?php include("dbconnect.php")?>
<html>
<head>
<meta charset="utf-8">
<title>showfries</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
	<div class="show">
	<div class="row">
		<?php
	$query=" select * from pasta";
	$kq= mysql_query($query) or die(error());
	while($pt=mysql_fetch_array($kq))
	{
	?>
  <div   class="column">
	 <a href="chitiet_fr.php?id=<?=$pt['id_pasta']?>">
	  
    <img style="width: 250px;height: 250px" src="<?php echo $pt['anh_pasta']?>" </im><br>
	 <span><?php echo $pt['ten_pasta']?></span><br>
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