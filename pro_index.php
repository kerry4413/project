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
                echo '<div><p>目前登入:'.$_SESSION['user'].'</p>';
                echo '<div><p><a href="pro_player.php">訓練家資料</a> <a href="pro_dic.php">圖鑑</a> <a href="pro_modify.php">更改資料</a> <a href="pro_logout.php">登出</a></div>';   
            }
        ?>
    </body>
</html>