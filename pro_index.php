<?php session_start(); ?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html" charset="utf-8">
        <title>Index</title>
    </head>
    <body>
        <h1>Pokemon Dictionary</h1>
        <?php
            if(!isset($_SESSION['login'])){
                echo '<div><p><a href="pro_register.php">註冊</a> <a href="pro_login.php">登入</a></div>';
            }
            else{
                require 'pro_connect.php';
                //echo 'Error:'.mysqli_error($db);
                $query1 = 'select count(ID) as count1 from player where plevel >= 50';
                if($take = mysqli_query($db, $query1)){
                    while($result = mysqli_fetch_object($take)){
                        $count = $result -> count1;
                    }
                }
                echo '<div><p>目前登入:'.$_SESSION['user'].'&nbsp;&nbsp;&nbsp;高階訓練家目前有'.$count.'個</p>';
                echo '<div><p><a href="pro_player.php">訓練家資料</a>&nbsp;&nbsp;&nbsp;<a href="pro_dic.php">圖鑑</a>&nbsp;&nbsp;&nbsp;<a href="pro_modify.php">更改資料</a>&nbsp;&nbsp;&nbsp;<a href="pro_npc.php">NPC資料</a>&nbsp;&nbsp;&nbsp;<a href="pro_logout.php">登出</a></div>';   
            }
        ?>
    </body>
</html>