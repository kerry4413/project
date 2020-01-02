<?php session_start()?>
<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="static/css/bootstrap.css">
        <link rel="stylesheet" href ="static/assets/css/main.css"/>
        <link rel="stylesheet" href ="static/assets/css/login.css"/>

        <meta http-equiv="content-type" content="text/html" charset="utf-8">
        
        <title>Player</title>
        <style>

            td{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1 class="form-signin-heading " style="font-size:250%">Player Profile</h1>
        <section class="wrapper"> 
        <div class="inner" style="width:75%;margin-left: auto;margin-right:auto; ">
            
            <?php 
                require 'pro_connect.php';
                $query = 'select * 
                        from player, pokemon
                        where player.pokemon = pokemon.pokemon_id and player.id = "'.$_SESSION['login'].'"';
                
                echo
                    '<table border="1" class="table table-striped table-dark" style="table-layout:fixed">
                    <thead>
                    <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Pokemon</td>
                    <td>Introduce</td>
                    <td>Player_level</td>
                    </tr>
                    </thead>
                    <tbody>
                    ';
                if($take = mysqli_query($db, $query)){
                    while($result = mysqli_fetch_object($take)){
                        echo '<tr>';
                        echo '<td>'.$result->ID.'</td>';
                        echo '<td>'.$result->Name.'</td>';
                        echo '<td>'.$result->name.'</td>';
                        echo '<td>'.$result->Introduce.'</td>';
                        echo '<td>'.$result->plevel.'</td>';
                        echo '</tr>';
                    }
                    echo '</tbody></table>';
                } 
            ?>   
        </div>
        </section>
        <b><a href="pro_index.php" style="font-family:Microsoft JhengHei,'Courier New', Courier, monospace;width:10%;font-size:15px;color:#727a82;text-decoration:none;position:absolute;left:50%;margin-left:-5%; text-align: center;" >返回主頁</a></b>
    </body>

</html>
