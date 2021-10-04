<?php
$ketnoi=mysql_connect("localhost","root","usbw");
if(!$ketnoi)
	{
	die('could not connect :'.mysql_error());
	}
$con=mysql_select_db("pizza",$ketnoi);
@mysql_query("SET NAMES utf8");
?>