﻿<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>記分板</title>
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
                <li class="active"><a href="my_score.php">我的分數</a></li>
                <li><a href="hot.php">熱門遊戲榜</a></li>
                <li><a href="index.html">登出</a></li>
            </ul>
        </div>
    </nav>
    計分表：
    <div class="input-field col s12">
        <select id="myselect" onchange="show()">
            <option value="overall">Overall</option>
            <option value="minesweeper">踩地雷</option>
            <option value="brick">打磚塊</option>
            <option value="2048">2048</option>
            <option value="english">英文測驗</option>
        </select>
    </div>
    <table id="table" class="highlight centered">
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
$i=1;
if(isset($_POST['game']) && $_POST['game']!="overall"){
    $query="SELECT `game`, `score`, `time` FROM `score` WHERE `username`='$_SESSION[account]' AND `game`='$_POST[game]' ORDER BY `score` DESC, `time` ASC";
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
}else{
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
    </table>
    <script>
    function show() {
        var oXHR = new XMLHttpRequest();
        var game = document.getElementById("myselect").options[document.getElementById("myselect").selectedIndex].value;
        if (1) {
            para = "game=" + game;
            oXHR.open("POST", "my_score_change.php", true);
            oXHR.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            oXHR.onreadystatechange = function() {
                if (oXHR.readyState == 4 && oXHR.status == 200) {
                    document.getElementById("table").innerHTML = oXHR.responseText;
                }
            }
            oXHR.send(para);
        }
    }
    </script>
    <div id="result" class="col s12"></div>
    <script>
    $(document).ready(function() {
        $('select').material_select();
    });
    </script>
</body>

</html>
