<?php
    session_start();
    $id = $_POST['id'];
    $passwords = $_POST['passwords'];

    $id = trim($id);
    $passwords = trim($passwords);
    
    
    require 'pro_connect.php';
    $query = "select * from player where ID ='$id'";
    if($take = mysqli_query($db, $query)){
        while($result = mysqli_fetch_object($take)){
            $dbpass = $result->Passwords;
            $dbname = $result->Name;
        }
        if($passwords == $dbpass){
            $_SESSION['user'] = $dbname;
            $_SESSION['login'] = $id;
            echo "<p>Login successful!</p>";
            header("refresh:2; url=pro_index.php");
        }
        else{
            echo "<p>Maybe your ID or passwords is wrong!";
            header("refresh:2; url=pro_login.php");
        }
    }
    else{
        echo "<p>Maybe your ID or passwords is wrong!";
        header("refresh:2; url=pro_login.php");
    }

?>