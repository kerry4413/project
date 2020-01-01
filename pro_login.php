<?php session_start(); ?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html" charset="utf-8">
        <title>login</title>
    </head>
    <body>
        <?php
            if(isset($_SESSION['login'])){
                header("location:my_index.php");
            }
        ?>
        <h1>Login</h1>
        <form action="pro_login_check.php" method="post">
            ID:
            <input name="id" type="text" required>
            <br>
            Passwords:
            <input name="passwords" type="text" required>
            <br>
            <input name="login" type="submit" value="login">
        </form>
    </body>
</html>