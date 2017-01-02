<?php
$host="140.116.245.148";
$user="f74032146";
$upwd="00000AAA";
$db="f74032146";

$link=mysqli_connect($host,$user,$upwd) or die("Unable to connect".mysql_error());
mysqli_select_db($link,$db) or die("Unable to select database");
?>
