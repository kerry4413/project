<?php session_start()?>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html" charset="utf-8">
        <title>Finish</title>
    </head>
    <body>
        <p>更改會員資料成功</p>
        <p>將自動跳轉至首頁</p>
        <p>若5秒後未跳轉請點擊<a href="pro_index.php">連結</a></p>
    </body>
</html>
<?php
    header("refresh:2; url=pro_index.php");
?>