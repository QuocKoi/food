<!DOCTYPE html>
<?php include("dbconnect.php")?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<style>
body
.lienhe * {box-sizing: border-box;}

.lienhe input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid  #7E7E7E ;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
background: #3A3A3A;
	color: aliceblue
}
.lienhe input[type=text]:hover, select:hover, textarea:hover {
		opacity: 0.6;
	}

.lienhe input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.lienhe input[type=submit]:hover {
  background-color: #45a049;
}

	</style>
</head>
<body>



<div class="lienhe container">
	<h1 align="center">Đóng Góp Ý Kiến</h1>
	
  <form action="xlylienhe.php" method="post">
    <label for="fname">Họ Tên</label>
    <input type="text" id="tenkh" name="tenkh" placeholder="Your name..">

   
    <label for="country">Địa Chỉ</label>
    <input type="text" id="diachi" name="diachi" >
    
	 <label for="lname">Điện Thoại</label>
    <input type="text" id="dienthoai" name="dienthoai" placeholder="Your Phone....">


    <label for="subject">Ý Kiến</label>
    <textarea id="subject" name="ykien" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
