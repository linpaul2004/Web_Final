<?php
include_once "config.php";
session_start();
if(isset($_POST['email'])){
	$query="INSERT INTO `f74032146`.`user` (`username` ,`password` ,`email`) VALUES ('$_POST[username]', '$_POST[password]', '$_POST[email]');";
	if(mysqli_query($link,$query)){
		echo "<div class=\"notice success\"><i class=\"icon-ok icon-large\"></i> 註冊成功, ".$_POST['username']."\n<a href=\"#close\" class=\"icon-remove\"></a></div>";
	}else{
		echo "<div class=\"notice error\"><i class=\"icon-remove-sign icon-large\"></i> 帳號已被使用\n<a href=\"#close\" class=\"icon-remove\"></a></div>";
	}
}else{
	$query="SELECT * FROM `user` WHERE username=\"".$_POST['username']."\"";
	$result=mysqli_query($link,$query);
	if($result){
		$rows=mysqli_fetch_array($result);
		if($rows[1]==$_POST['password']){
			$_SESSION['account']=$_POST['username'];
			echo "<div class=\"notice success\"><i class=\"icon-ok icon-large\"></i> Hello, ".$_SESSION['account']."\n<a href=\"#close\" class=\"icon-remove\"></a></div>";
		}else{
			echo "<div class=\"notice error\"><i class=\"icon-remove-sign icon-large\"></i> 帳號密碼錯誤\n<a href=\"#close\" class=\"icon-remove\"></a></div>";
		}
	}
}
?>
