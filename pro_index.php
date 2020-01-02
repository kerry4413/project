<?php session_start(); ?>
<html>
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="static/assets/css/main.css" />
        <link rel="stylesheet" href ="static/assets/css/login.css"/>
        <meta http-equiv="content-type" content="text/html" charset="utf-8">
        <style>
            a{
                font-family:Microsoft JhengHei,'Courier New', Courier, monospace;width:10%;font-size:15px;color:#727a82;text-decoration:none;
                font-size:200%;
            }
            button{
                font-size:20px;
            }
        </style>
        <title>Index</title>
    </head>
    <body>
    <h1 class="form-signin-heading "style="font-size:250%">Pokemon Dictionary</h1>
    <section class="wrapper">
    <div class="inner" style="width:75%;margin-left: auto;margin-right:auto; ">
        
        <?php
            if(!isset($_SESSION['login'])){
                echo '<div><a href="pro_register.php">註冊</a> <a href="pro_login.php">登入</a></div>';
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
                echo '<div><h1>目前登入ID：&nbsp;&nbsp;&nbsp;<span style="color:#606060">'.$_SESSION['login'].'</span><br><br>'.'目前登入名稱：&nbsp;&nbsp;&nbsp;<span style="color:#606060">'.$_SESSION['user'].'</span><br><br>'.'高階訓練家目前有： &nbsp;&nbsp;&nbsp;<span style="color:#606060">'.$count.'&nbsp;個</span></h1>';
                echo '<div><a href="pro_player.php"><button>訓練家資料</button></a>&nbsp;<a href="pro_dic.php"><button>圖鑑</button></a>&nbsp;<a href="pro_modify.php"><button>更改資料</button></a>&nbsp;<a href="pro_npc.php"><button>NPC資料</button></a>&nbsp;<a href="pro_logout.php"><button>登出</button></a></div>';   
            }
        ?>
    </div>
    </section>
    </body>
</html>