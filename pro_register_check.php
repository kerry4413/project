<?php 
    session_start();
    $id = $_POST['id'];
    $name = $_POST['name'];
    $passwords = $_POST['passwords'];
    $pokemon = $_POST['pokemon'];
    $introduce = $_POST['introduce'];
    
    $id = trim($id);
    $name = trim($name);
    $passwords = trim($passwords);
    $pokemon = trim($pokemon);
    $introduce = trim($introduce);
    
    if($id != null && $name != null && $passwords != null && $pokemon != null && $introduce != null){
        require 'pro_connect.php';
        require 'pro_function.php';
        $query = "Select ID from player where ID ='$id'";
        $check = mysqli_query($db,$query);
        while($row = mysqli_fetch_array($check)){
            $id_check = $row['ID'];
            //print_r($account_check);
        }
        if($id == $id_check){
            echo "<p>This ID is already exist!</p>";
            header("refresh:2; url=pro_register.php");
        }
        else{
            if(!store('id', 'name', 'passwords', 'pokemon', 'introduce')){ 
            $_SESSION["login"] = $id;
            $_SESSION['user'] = $name;
            header("location:pro_register_finish.php");
            }
            else{
                echo "store fail";
            }
        }
    }
    else{
        if($id == null) echo "<p>please input ID!</p>";
        if($name == null) echo "<p>please input Name!</p>";
        if($passwords == null) echo "<p>please input Passwords!</p>";
        if($pokemon == null) echo "<p>please input Pokemon ID!</p>";
        if($introduce == null) echo "<p>please input Introduce!</p>";
        header("refresh:2 ;url=pro_register.php");
    }
?>