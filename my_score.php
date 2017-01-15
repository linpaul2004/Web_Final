<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/kickstart.js"></script>
    <link rel="stylesheet" href="css/kickstart.css" media="all" />
	<title>記分板</title>
	<?php
	include_once "config.php";
	session_start();
	?>
</head>
<body>
<table class="sortable">
<thead><tr>
	<th>遊戲順序</th>
	<th>遊戲</th>
	<th>分數</th>
	<th>時間</th>
</tr></thead>
<tbody>
<?php
$i=1;
$query="SELECT `game`, `score`, `time` FROM `score` WHERE `username`='$_SESSION[account]' ORDER BY `time` ASC, `score` DESC";
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
