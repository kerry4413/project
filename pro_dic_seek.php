<?php?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html" charset="utf-8">
        <title>Dictionary</title>
    </head>
    <body>
        <h1>Dictionary</h1>
        <form action="" method="post">
            Pokemon name:
            <input name="seek" type="text">
            <input type="submit" value="seek">
        </form>
        <?php
            require 'pro_connect.php';
            $seek = $_POST['seek'];
            $seek = trim($seek);
            
            echo
                '<table border="1">
                <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Attribute</td>
                <td>Restraint</td>
                </tr>';
            $query = 'select * from pokemon where name ="'.$seek.'"';
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
            else{
                echo 'Not exist!';
            }
        ?>
    </body>
</html>