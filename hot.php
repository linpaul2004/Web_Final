<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>熱門遊戲榜</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
    include_once "config.php";
    session_start();
    ?>
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo center">你好，<?php echo($_SESSION['account']) ?></a>
            <ul class="left hide-on-med-and-down">
                <li><a href="lobby.php">遊戲大廳</a></li>
                <li><a href="my_score.php">我的分數</a></li>
                <li class="active"><a href="hot.php">熱門遊戲榜</a></li>
                <li><a href="index.html">登出</a></li>
            </ul>
        </div>
    </nav>
    <table>
        <thead>
            <tr>
                <th>名次</th>
                <th>遊戲</th>
                <th>連結</th>
                <th>點擊次數</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i=1;
            $query="SELECT `alias`,`game`,`click` FROM `information` ORDER BY `click` DESC";
            mysqli_query($link,"SET NAMES utf8");
            $result=mysqli_query($link,$query);
            if($result){
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
            }
            ?>
        </tbody>
    </table>
    <script>
    function clicked(game) {
        var oXHR = new XMLHttpRequest();
        if (1) {
            para = "game=" + game;
            oXHR.open("POST", "click.php", true);
            oXHR.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            oXHR.onreadystatechange = function() {
                if (oXHR.readyState == 4 && oXHR.status == 200) {
                    if (oXHR.responseText != "Error") {
                        console.log(oXHR.responseText);
                        window.location = oXHR.responseText;
                    }
                }
            }
            oXHR.send(para);
        }
    }
    </script>
</body>

</html>
