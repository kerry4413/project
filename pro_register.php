<html>
    <head>
        <meta http-equiv="content-type" content="text/html" charset="utf-8">
        <title>register</title>
        <link rel="stylesheet" href ="static    /assets/css/login.css"/>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="static/assets/css/main.css" />
    </head>
    <body>
        <div class="inner" style="background-color:rgba(195,255,255,0.1); ">
            <form class="form-signin" action="pro_register_check.php" method="post">
            <input id="next" name="next" type="hidden" value="/">
            <input id="csrf_token" name="csrf_token" type="hidden" value="IjY5NDU0MDk5MDk4ZDM1YmY3NDNjZGRlNzBlOGVkNDgxZTY4NTNkODQi.XanKnA.njAOl4lsvUasFEAByhQ-bT_wma0">

            <h1 class="form-signin-heading">註冊</h1>
            <label for="email">請輸入ID:
            <input id="email" type="text" class="form-control" name="id" placeholder="ID" required autofocus/></label>

            <label for="Name">請輸入Name:
            <input id="email" type="text" class="form-control" name="name" placeholder="Your name" required/></label>

            <label for="password">請輸入密碼: 
            <input id="password" type="password" class="form-control" name="passwords" placeholder="Password" required></label>

            <label for="pokemon">請輸入Pokemon: 
            <input id="password" type="text" class="form-control" name="pokemon" placeholder="please input pokemon id" required></label>

            <label for="pokemon">請輸入Introduce: 
            <input id="password" type="text" class="form-control" name="introduce" placeholder="please input your introduce" required></label>

            <input id="submit" name="submit" type="submit" value="註冊" style="width:50%;height: 55px; font-size: 16px; margin: 4px 2px;"><br>

            <b><a href="pro_index.php" style="width:20%;font-size:15px;color:#727a82;background-color:rgba(0,0,0,0);text-decoration:none;" >返回主頁</a></b>
            </form>
        </div>
    </body>
</html>