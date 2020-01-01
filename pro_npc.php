<html>
    <head>
        <meta http-equiv="content-type" content="text/html" charset="utf-8">
        <title>NPC</title>
    </head>
    <body>
        <h1>NPC</h1>
        <?php
            require 'pro_connect.php';
            
            echo
                '<table border="1">
                <tr>
                <td>ID</td>
                <td>NPC</td>
                <td>Pokemon</td>
                <td>Introduce</td>
                </tr>';
           $query = 'select * 
                    from npc, pokemon
                    where npc.Pokemon_id = pokemon.pokemon_id';
            if($take = mysqli_query($db, $query)){
                while($result = mysqli_fetch_object($take)){
                    echo '<tr>';
                    echo '<td>'.$result->ID.'</td>';
                    echo '<td>'.$result->Name.'</td>';
                    echo '<td>'.$result->name.'</td>';
                    echo '<td>'.$result->Introduce.'</td>';
                    echo '</tr>';
                }
            }
        ?>
    </body>
</html>