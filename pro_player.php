<?php session_start()?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html" charset="utf-8">
        <title>Player</title>
    </head>
    <body>
        <h1>Player Profile</h1>
        <?php 
            require 'pro_connect.php';
            $query = 'select * 
                    from player, pokemon
                    where player.pokemon = pokemon.pokemon_id and player.id = "'.$_SESSION['login'].'"';
            
            echo
                '<table border="1">
                <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Pokemon</td>
                <td>Introduce</td>
                <td>Player_level</td>
                </tr>';
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
            }
        ?>
    </body>

</html>
