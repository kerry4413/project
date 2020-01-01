<?php session_start();?>
<html>
    <head>
        <title>登入</title>
        <link rel="stylesheet" href ="static/assets/css/login.css"/>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="static/assets/css/main.css" />
    </head>
    <body>
        <div class="inner" style="background-color:rgba(195,255,255,0.1); ">
            <form class="form-signin" action="pro_modify_upload.php" method="post">
                <h1 class="form-signin-heading">Player's Profile Management</h1>
                <input id="next" name="next" type="hidden" value="/">
                <input id="csrf_token" name="csrf_token" type="hidden" value="IjY5NDU0MDk5MDk4ZDM1YmY3NDNjZGRlNzBlOGVkNDgxZTY4NTNkODQi.XanKnA.njAOl4lsvUasFEAByhQ-bT_wma0">
                <?php
                    require 'pro_connect.php';
                    $query = 'select * from player where id = "'.$_SESSION['login'].'"';
                    if($take = mysqli_query($db, $query)){
                        while($result = mysqli_fetch_object($take)){
                            $dbname = $result->Name;
                            $dbpoke = $result->Pokemon;
                            $dbintro = $result->Introduce;
                        }
                        echo '<label>Name:<input name="name" class="form-control" type="text" placeholder="'.$dbname.'"></label>';
                        echo '<label>Pokemon:<input name="pokemon" class="form-control" type="text" placeholder="'.$dbpoke.'"></label>';
                        echo '<label>Introduce:<input name="intro" class="form-control" type="text" placeholder="'.$dbintro.'"></label>';
                    }
                    else{
                        echo 'Error:'.mysqli_error($db);
                    }
                ?>
                <input name="submit" type="submit" value="OK"><br>

                <b><a href="pro_delete.php" style="width:20%;font-size:15px;color:#727a82;background-color:rgba(0,0,0,0);text-decoration:none;" >刪除帳號</a>  </b>
                <b><a href="pro_index.php" style="width:20%;font-size:15px;color:#727a82;background-color:rgba(0,0,0,0);text-decoration:none;" >返回主頁</a></b>
            </form>
            
	</div>

    </body>
</html>  