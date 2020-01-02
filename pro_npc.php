<html>

<head>
    <<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <link rel="stylesheet" href="static/assets/css/main.css" />
    <link rel="stylesheet" href="static/assets/css/login.css" />

    <meta http-equiv="content-type" content="text/html" charset="utf-8">

    <title>NPC</title>
    <style>
        td {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1 class="form-signin-heading " style="font-size:250%">NPC</h1>
    <section class="wrapper">

        <div class="inner" style="width:75%;margin-left: auto;margin-right:auto; ">
            <?php
            require 'pro_connect.php';

            echo
                '<table border="1" class="table table-striped table-dark" style="table-layout:fixed">
                <thead>
                <tr>
                <td>ID</td>
                <td>NPC</td>
                <td>Pokemon</td>
                <td>Introduce</td>
                </tr>
                </thead>
                <tbody>';
            $query = 'select * 
                    from npc, pokemon
                    where npc.Pokemon_id = pokemon.pokemon_id';
            if ($take = mysqli_query($db, $query)) {
                while ($result = mysqli_fetch_object($take)) {
                    echo '<tr>';
                    echo '<td>' . $result->ID . '</td>';
                    echo '<td>' . $result->Name . '</td>';
                    echo '<td>' . $result->name . '</td>';
                    echo '<td>' . $result->Introduce . '</td>';
                    echo '</tr>';
                }
            }
            echo '</tbody></table>';
            ?>
            <a href="pro_index.php">返回主頁</a>
        </div>
    </section>
</body>

</html>