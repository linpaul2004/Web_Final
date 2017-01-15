<?php
include_once "config.php";
session_start();
$query="INSERT INTO `f74032146`.`score` (`username`,`game` ,`score`) VALUES ('$_SESSION[account]', '$_POST[game]', '$_POST[score]');";
if(mysqli_query($link,$query)){
	$_SESSION['game']=$_POST['game'];
	$_SESSION['score']=$_POST['score'];
	echo "Success";
}else{
	echo "<div class=\"notice error\"><i class=\"icon-remove-sign icon-large\"></i> 分數傳送失敗\n<a href=\"#close\" class=\"icon-remove\"></a></div>";
}
?>
