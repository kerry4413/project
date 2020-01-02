<?php session_start() ?>
<html>

<head>

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="static/css/bootstrap.css">
        <link rel="stylesheet" href="static/assets/css/main.css" />
        <link rel="stylesheet" href="static/assets/css/login.css" />

        <meta http-equiv="content-type" content="text/html" charset="utf-8">

        <title>Dictionary</title>
        <style>
            td {
                text-align: center;
            }
        </style>
    </head>

<body>
    <h1 class="form-signin-heading " style="font-size:250%">Dictionary</h1>

    <section class="wrapper">
  
        <div class="inner" style="width:75%;margin-left: auto;margin-right:auto; ">
            <form action="pro_dic_seek.php" method="post">
                <h1 style="color:#606060">Pokemon name:</h1>
                <input style="color:#606060"name="seek" type="text" placeholder="請輸入 Pokemon name" autofocus>
                <ul class="actions" style="text-align:right">
                <br>
                    <li>
                        <input type="submit" value="尋找">
                    </li>
                    <li>
                        <input type="reset" value="取消" class="alt">
                    </li>

                </ul>


                <b><a href="pro_index.php" style="font-family:Microsoft JhengHei,'Courier New', Courier, monospace;width:10%;font-size:15px;color:#727a82;text-decoration:none;position:absolute;left:50%;margin-left:-5%; text-align: center;" >返回主頁</a></b>   
                <br>
            </form>

            <?php
                require 'pro_connect.php';

                echo
                    '<table border="1" class="table table-striped table-dark" style="table-layout:fixed">
                        <thead>
                        <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Attribute</td>
                        <td>Restraint</td>
                        </tr>
                        </thead>
                        <tbody>';
                $query = 'select * from pokemon';
                if ($take = mysqli_query($db, $query)) {
                    while ($result = mysqli_fetch_object($take)) {
                        echo '<tr>';
                        echo '<td>' . $result->pokemon_id . '</td>';
                        echo '<td>' . $result->name . '</td>';
                        echo '<td>' . $result->attribute . '</td>';
                        echo '<td>' . $result->restraint . '</td>';
                        echo '</tr>';
                    }
                    echo '</tbody></table>';
                }

            ?>
        </div>
    </section>


</body>

</html>