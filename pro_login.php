<!DOCTYPE html>
<html>

<head>
    <title>登入</title>
    <link rel="stylesheet" href ="static/assets/css/login.css"/>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="static/assets/css/main.css" />
</head>

<body class="login">
    <?php
        if(isset($_SESSION['login'])){
            header("location:my_index.php");
        }
    ?>
    <div class="inner" style="background-color:rgba(195,255,255,0.1); ">
        <form class="form-signin" action="pro_login_check.php" method="post">
        <input id="next" name="next" type="hidden" value="/">
        <input id="csrf_token" name="csrf_token" type="hidden" value="IjY5NDU0MDk5MDk4ZDM1YmY3NDNjZGRlNzBlOGVkNDgxZTY4NTNkODQi.XanKnA.njAOl4lsvUasFEAByhQ-bT_wma0">

        <h1 class="form-signin-heading">登入</h1>
        <label for="email">請輸入Email:
        <input id="email" type="text" class="form-control" name="id" placeholder="Email Address" required value=""
                autofocus="" /></label>

        <label for="password">請輸入密碼: 
        <input id="password" type="password" class="form-control" name="passwords" placeholder="Password" required value=""></label>

        <input type="checkbox" name="rememberMe" id="rememberMe" value="y">
			  <label for="rememberMe"><b>記住我</b></label>
            <br>
            <input id="submit" name="submit" type="submit" value="登入" style="width:50%;height: 55px; font-size: 16px; margin: 4px 2px;"><br>
            <label> 還沒有帳號嗎?<br>
            <input type="button" style="width:50%;height: 55px; font-size: 16px; margin: 4px 2px;" value="註冊" onclick="location.href='pro_register.php'" /></label><br>

            <b><a href="pro_index.php" style="width:20%;font-size:15px;color:#727a82;background-color:rgba(0,0,0,0);text-decoration:none;" >返回主頁</a></b>
		</form>
	</div>
<body>
</html>