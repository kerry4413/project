<?php session_start(); ?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html" charset="utf-8">
        <title>Register_finish</title>
    </head>
    <body>
        <p>註冊成功</p>
        <?php
            echo "<p>歡迎  ".$_SESSION['user']."</p>";
        ?>
        <p>將自動跳轉至首頁</p>
        <p>若5秒後未跳轉請點擊<a href="pro_index.php">連結</a></p>
    </body>
</html>
<?php
    header("refresh:2; url=pro_index.php");
?>