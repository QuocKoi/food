<!doctype html>
<html>
	<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<title>Quảng Cáo</title>
</head>
<body>
<script type="text/javascript">
function hide_float_right() {
    var content = document.getElementById('float_content_right');
    var hide = document.getElementById('hide_float_right');
    if (content.style.display == "none")
    {content.style.display = "block"; hide.innerHTML = '<a href="javascript:hide_float_right()"> Tắt quảng cáo [X]</a>'; }
        else { content.style.display = "none"; hide.innerHTML = '<a href="javascript:hide_float_right()">Sale Lên Đến 80%</a>';
    }
    }
	function myF(){
      onl.style.display = "block";
      
    }
    function un(){
        onl.style.display = "none";
    }
</script>
	
<style>
.float-ck { position: fixed; bottom: 250px; z-index: 9000}
* html .float-ck {position:absolute;bottom:auto;top:expression(eval (document.documentElement.scrollTop+document.docum entElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0))) ;}
#float_content_right {border: 1px solid #01AEF0;}
#hide_float_right {text-align:right; font-size: 11px;}
#hide_float_right a {background: #01AEF0; padding: 2px 4px; color: #FFF;}
</style>
<body onload="myF()">
    <div class="float-ck" style="right: 0px" >
<div id="hide_float_right">
<a href="javascript:hide_float_right()">Tắt quảng cáo[X]</a></div>
<div id="float_content_right">
<!-- Start quang cao-->
<img src="images/QuangCao/giphy.gif" width="165" height="115" />
<!-- End quang cao -->
</div>
</div>
    <div id="onl" style="position: fixed; bottom: 0px; top:100px;left:300px;z-index:100;">
        <div style="backgroud-color:black; width:1000px; height=200px;">
            <a href="javascript: un()" style="color:#FF0000"><i class="fas fa-times-circle"></i></a>
            <img src="images/QuangCao/v.jpg" width="500px" height="400px">
        </div>
    </div>	
	 
</body>
</html>