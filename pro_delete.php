<?php
    session_start();
    require 'pro_connect.php';
    $query = 'delete from player where id = "'.$_SESSION['login'].'"';
    if($result = mysqli_query($db, $query)){
        echo 'Delete complete!';
        unset($_SESSION['login']);
        unset($_SESSION['user']);
        header("refresh:2; url=pro_index.php");
    }
    else{
        echo 'Error:'.mysqli_error($db);
    }
?>