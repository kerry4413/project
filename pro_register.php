<html>
    <head>
        <meta http-equiv="content-type" content="text/html" charset="utf-8">
        <title>register</title>
    </head>
    <body>
        
        <h1>註冊</h1>
        <form action="pro_register_check.php" method="post">
            ID:
            <input name="id" type="text" required>
            <br>
            Name:
            <input name="name" type="text" required>
            <br>
            Passwords:
            <input name="passwords" type="text" required>
            <br>
            Pokemon:
            <input name="pokemon" type="text" placeholder="please input pokemon id" required>
            <br>
            Introduce:
            <input name="introduce" type="text" required>
            <br>
            <input name="submit" type="submit" value="submit">
        </form>
    </body>
</html>