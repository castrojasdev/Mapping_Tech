<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <title>LOGIN</title>
</head>
<body>
    <div class="image"></div>
    <div class="login-side">
        <div class="login-card">
                <div class="logo">
                    <img src="logo.png" alt="" width="90px">
                </div>
                
            <div class="heading">
                <h2>LOGIN</h2>
            </div>
            <form method="post" action="login.php">
                <?php include('errors.php'); ?>
            <div class="container">
            <div class="inputs">
                <label>USERNAME</label>
                <input type="name" name="username" placeholder="example: @test.com" />
                <label>PASSWORD</label>
                <input type="password"  name="password" placeholder="example: Vitstudent@" />
                <h4>No account? <a href="register.php" target="_blank">Create new!</a></h4>
                <button type="submit" class="btn" name="login_user">LOGIN</button>
              </div>
            
        </div>
    </div>
    </div>
</form>
</body>
</html>