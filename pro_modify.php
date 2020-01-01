<?php session_start();?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html" charset="utf-8">
        <title>Player's Profile Management</title>
    </head>
    <body>
        <h1>Player's Profile Management</h1>
        <form action="pro_modify_upload.php" method="post">
            <?php
                require 'pro_connect.php';
                $query = 'select * from player where id = "'.$_SESSION['login'].'"';
                if($take = mysqli_query($db, $query)){
                    while($result = mysqli_fetch_object($take)){
                        $dbname = $result->Name;
                        $dbpoke = $result->Pokemon;
                        $dbintro = $result->Introduce;
                    }
                    echo 'Name:<input name="name" type="text" placeholder="'.$dbname.'"><br>';
                    echo 'Pokemon:<input name="pokemon" type="text" placeholder="'.$dbpoke.'"><br>';
                    echo 'Introduce:<input name="intro" type="text" placeholder="'.$dbintro.'"><br>';
                }
                else{
                    echo 'Error:'.mysqli_error($db);
                }
            ?>
            <input name="submit" type="submit" value="OK">
            <input name="delete" type="button" value="Delete account" onclick="location.href='pro_delete.php'">
        </form>
    </body>
</html>  