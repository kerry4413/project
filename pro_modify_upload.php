<?php
    session_start();
    $name = $_POST['name'];
    $pokemon = $_POST['pokemon'];
    $intro = $_POST['intro'];
    

    $name = trim($name);
    $pokemon = trim($pokemon);
    $intro = trim($intro);
    
    require 'pro_connect.php';
    if($name != null){
        $query1 = 'update player set name ="'.$name.'" where id ="'.$_SESSION['login'].'"';
        $_SESSION['user'] = $name;
        mysqli_query($db, $query1);
    }
    if($pokemon != null){
        $query2 = 'update player set pokemon ="'.$pokemon.'" where id ="'.$_SESSION['login'].'"';
        mysqli_query($db, $query2);
    }
    if($intro != null){
        $query3 = 'update player set introduce ="'.$intro.'" where id ="'.$_SESSION['login'].'"';
        mysqli_query($db, $query3);
    }
    
    mysqli_close($db);
    header('location:pro_modify_finish.php'); 
?>