<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Signupstyle.css">
    <title>Signup</title>
</head>
<body>
    <div class="signup-card">
        
        <div class="container">
            <h2>SIGNUP</h2>
            <form method="post" action="register.php">
                <?php include('errors.php'); ?>
            <div class="inputs">
                <div class="row">
                    <div class="colum1">
                    <label>USER NAME</label>
                    <input type="text" placeholder="example: Akash" name="username" value="<?php echo $username; ?>">
                </div>
                <div class="colum2">
                <label>NAME</label>
                <input type="text" placeholder="example: Raj">
                </div></div>
                <label>EMAIL</label>
                <input type="email" placeholder="example: @test.com" name="email" value="<?php echo $email; ?>" />
                <label>PASSWORD</label>
                <input type="password" placeholder="example: Vitstudent@" name="password_1" />
                <label>RE-TYPE PASSWORD</label>
                <input type="password" placeholder="example: Vitstudent@" name="password_2"/><!--
               <label>LOCATION</label>
               <select name="" id="" >
                   <option value="">select</option>
                   <option value="">TamilNadu</option>
                   <option value="">Andra Pradesh</option>
                   <option value="">Kerala</option>
               </select>-->
               <button type="submit" class="btn" name="reg_user">Submit</button>
              </div>
            </form>
        </div>
    </div>
    <div class="backimage"></div>
    
</body>
</html>