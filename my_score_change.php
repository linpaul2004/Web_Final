<?php
include_once "config.php";
session_start();
$i=1;
if(isset($_POST['game']) && $_POST['game']!="overall"){
	?>
    <thead>
        <tr>
            <th>名次</th>
            <th>分數</th>
            <th>時間</th>
        </tr>
    </thead>
    <tbody>
        <?php
	$query="SELECT `score`, `time` FROM `score` WHERE `username`='$_SESSION[account]' ORDER BY `score` DESC, `time` ASC";
	$result=mysqli_query($link,$query);
	if($result){
		$rows=mysqli_fetch_array($result);
		while($rows){
			echo "<tr>\n";
			echo "\t<td>".$i."</td>\n";
			echo "\t<td>".$rows[0]."</td>\n";
			echo "\t<td>".$rows[1]."</td>\n</tr>\n";
			$i=$i+1;
			$rows=mysqli_fetch_array($result);
		}
	}
}else{
	?>
            <thead>
                <tr>
                    <th>遊戲順序</th>
                    <th>遊戲</th>
                    <th>分數</th>
                    <th>時間</th>
                </tr>
            </thead>
            <tbody>
                <?php
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
}
?>
            </tbody>
