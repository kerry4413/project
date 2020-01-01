<?php?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html" charset="utf-8">
        <title>Dictionary</title>
    </head>
    <body>
        <h1>Dictionary</h1>
        <form action="pro_dic_seek.php" method="post">
            Pokemon name:
            <input name="seek" type="text">
            <input type="submit" value="seek">
        </form>
        <?php
            require 'pro_connect.php';
            
            echo
                '<table border="1">
                <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Attribute</td>
                <td>Restraint</td>
                </tr>';
            $query = 'select * from pokemon';
            if($take = mysqli_query($db, $query)){
                while($result = mysqli_fetch_object($take)){
                    echo '<tr>';
                    echo '<td>'.$result->pokemon_id.'</td>';
                    echo '<td>'.$result->name.'</td>';
                    echo '<td>'.$result->attribute.'</td>';
                    echo '<td>'.$result->restraint.'</td>';
                    echo '</tr>';
                }
            }
        ?>
    </body>
</html>