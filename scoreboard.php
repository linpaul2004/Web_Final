<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>記分板</title>
	<?php
	include_once "config.php";
	session_start();
	?>
</head>
<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<table class="highlight centered">
<?php
if(isset($_SESSION['score'])){
?>
<b>您的分數：
<?php
echo($_SESSION['score']);
?>
</b>
<?php
}
?>
<thead><tr>
	<th>名次</th>
	<th>用戶名稱</th>
	<th>分數</th>
	<th>時間</th>
</tr></thead>
<tbody>
<?php
$i=1;
$query="SELECT `username`, `score`, `time` FROM `score` WHERE `game`='$_SESSION[game]' ORDER BY `score` DESC, `time` ASC";
$result=mysqli_query($link,$query);
if($result){
	$rows=mysqli_fetch_array($result);
	while($rows){
		echo "<tr>\n";
		echo "\t<td>".$i."</td>\n";
		echo "\t<td>".$rows[0]."</td>\n";
		echo "\t<td>".$rows[1]."</td>\n";
		echo "\t<td>".$rows[2]."</td>\n</tr>\n";
		$i=$i+1;
		$rows=mysqli_fetch_array($result);
	}
}
?>
</tbody>
</table>
</body>
</html>
