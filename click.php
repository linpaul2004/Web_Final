<?php
include_once "config.php";
$query="SELECT `url`,`click` FROM `information` WHERE `game`='$_POST[game]'";
$result=mysqli_query($link,$query);
if($result){
	$rows=mysqli_fetch_array($result);
	if($rows){
		echo $rows[0];
		$query="UPDATE `information` SET `click`=".($rows[1]+1)." WHERE `game`='$_POST[game]';";
		$result=mysqli_query($link,$query);
	}else{
		echo "Error";
	}
}else{
	echo "Error";
}
?>
