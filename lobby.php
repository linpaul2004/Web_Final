<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--<link rel="stylesheet" href="style/index.css" type="text/css">-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>史萊姆好玩遊戲區</title>
    <?php
    session_start();
    ?>
</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <nav>
        <div class="nav-wrapper">
            <a href="./index.html" class="brand-logo center">你好，<?php echo($_SESSION['account']); ?></a>
            <ul class="left hide-on-med-and-down">
                <li class="active"><a href="lobby.php">遊戲大廳</a></li>
                <li><a href="my_score.php">我的分數</a></li>
                <li><a href="index.html">登出</a></li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="col s3">
            <div class="card medium sticky-action">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="img/1.png">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">打磚塊<i class="material-icons right">more_vert</i></span>
                    <p><a href="#" onclick="scoreboard('brick');return false;">排行榜</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">打磚塊<i class="material-icons right">close</i></span>
                    <p>經典打磚塊遊戲，相信 大家小時候一定都有玩過打磚塊遊戲吧，這款遊戲讓大家可以回味童年樂趣
                    </p>
                </div>
                <div class="card-action">
                    <a href="brick.html">開始玩</a>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card medium sticky-action">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="img/2.png">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">踩地雷<i class="material-icons right">more_vert</i></span>
                    <p><a href="#" onclick="scoreboard('minesweeper');return false;">排行榜</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">踩地雷<i class="material-icons right">close</i></span>
                    <p>Microsoft隨附的小遊戲， 踩地雷的線上版，採用Javascript， 不用擔心平台的問題， 就算是用MAC也可以回味
                    </p>
                </div>
                <div class="card-action">
                    <a href="minesweeper.html">開始玩</a>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card medium sticky-action">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="img/3.png">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">2048<i class="material-icons right">more_vert</i></span>
                    <p><a href="#" onclick="scoreboard('2048');return false;">排行榜</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">2048<i class="material-icons right">close</i></span>
                    <p>前一陣子風靡全球的2048遊戲， 現在在網頁遊戲上經典回歸， 沒有玩過的人，請務必體驗 這款經典版的2048遊戲
                    </p>
                </div>
                <div class="card-action">
                    <a href="2048/2048.html">開始玩</a>
                </div>
            </div>
        </div>
        <div class="col s3">
            <div class="card medium sticky-action">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="img/4.png">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">英文小測驗<i class="material-icons right">more_vert</i></span>
                    <p><a href=href="#" onclick="scoreboard('english');return false;">排行榜</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">英文小測驗<i class="material-icons right">close</i></span>
                    <p>英文練習小遊戲，內建題庫， 英文最重要的就是背單字， 答對全部10題就能達到最高分， 趕快來練習你的英文
                    </p>
                </div>
                <div class="card-action">
                    <a href="english.html">開始玩</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s3">
            <div class="card medium sticky-action">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator" src="img/5.png">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">俄羅斯方塊<i class="material-icons right">more_vert</i></span>
                    <p><a href="#" onclick="scoreboard('tetris');return false;">排行榜</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">俄羅斯方塊<i class="material-icons right">close</i></span>
                    <p>1980年末期至1990年代初期風靡全世界的電腦遊戲，是落下型益智遊戲的始祖當區域中某一橫行（列）的格子全部由方塊填滿時，則該列會被消除並成為玩家的得分。
                    </p>
                </div>
                <div class="card-action">
                    <a href="teris/teris.html">開始玩</a>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="preview">
        <div class="row x1">
            <div class="imgwrap">
                <span><img src="img/1.png" alt=""><p class="text"><a href="brick.html">開始玩</a></p></span>
                <p class="appear">
                    <br>
                    <br>
                    <br>經典打磚塊遊戲，相信
                    <br>大家小時候一定都有玩
                    <br>過打磚塊遊戲吧，這款
                    <br>遊戲讓大家可以回味童年樂趣
                </p>
            </div>
            <div class="imgwrap">
                <span><img src="img/2.png" alt=""><p class="text"><a href="minesweeper.html">開始玩</a></p></span>
                <p class="appear">
                    <br>
                    <br>
                    <br>Microsoft隨附的小遊戲，
                    <br>踩地雷的線上版，採用Javascript，
                    <br>不用擔心平台的問題，
                    <br>就算是用MAC也可以回味</p>
            </div>
            <div class="imgwrap">
                <span><img src="img/3.png" alt=""><p class="text"><a href="2048/2048.html">開始玩</a></p></span>
                <p class="appear">
                    <br>
                    <br>
                    <br>前一陣子風靡全球的2048遊戲，
                    <br>現在在網頁遊戲上經典回歸，
                    <br>沒有玩過的人，請務必體驗
                    <br>這款經典版的2048遊戲</p>
            </div>
            <div class="imgwrap">
                <span><img src="img/4.png" alt=""><p class="text"><a href="english.html">開始玩</a></p></span>
                <p class="appear">
                    <br>
                    <br>
                    <br>英文練習小遊戲，內建題庫，
                    <br>英文最重要的就是背單字，
                    <br>答對全部10題就能達到最高分，
                    <br>趕快來練習你的英文</p>
            </div>
        </div>
    </div>-->
    <script>
    function scoreboard(game) {
        var oXHR = new XMLHttpRequest();
        if (1) {
            para = "game=" + game;
            oXHR.open("POST", "scoreboard.php", true);
            oXHR.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            oXHR.onreadystatechange = function() {
                if (oXHR.readyState == 4 && oXHR.status == 200) {
                    window.location = "scoreboard.php";
                }
            }
            oXHR.send(para);
        }
    }
    </script>
</body>

</html>
