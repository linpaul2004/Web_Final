<div class="row">
    <div class="col s12">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">搜尋結果</span>
                <p style="font-size: 120%;">有
                    <?php
                    include_once "config.php";
    $i=1;
    mysqli_query($link,"SET NAMES utf8");
    $query="SELECT `alias`,`url`,`click` FROM `information` WHERE `game` LIKE '%$_POST[string]%' OR `alias` LIKE '%$_POST[string]%' ORDER BY `game`";
    $result=mysqli_query($link,$query);
    if($result){
        echo(mysqli_num_rows($result));
    }
    ?>&nbsp;個結果
                </p>
            </div>
        </div>
    </div>
</div>
<?php
if(mysqli_num_rows($result)){
	?>
    <table>
        <thead>
            <tr>
                <th>序號</th>
                <th>遊戲</th>
                <th>連結</th>
                <th>點擊次數</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $rows=mysqli_fetch_array($result);
            while($rows){
            	echo "<tr>\n";
				echo "\t<td>".$i."</td>\n";
				echo "\t<td>".$rows[0]."</td>\n";
				echo "\t<td><a href=\"#\" onclick=\"clicked('".$rows[1]."'); return false;\">".$rows[0]."</a>";
				echo "\t<td>".$rows[2]."</td>\n</tr>\n";
				$i=$i+1;
				$rows=mysqli_fetch_array($result);
            }
            ?>
        </tbody>
    </table>
    <?php
}
?>
