<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contactusstyle.css">
    <title>CONTACT US</title>
</head>
<body>
    <form method="post" action="contactus.php">
        <?php include('errors.php'); ?>
    <h1>
        CONTACT US 
    </h1>
    <div class="box">
        <div class="inputs">
            <label>EMAIL</label>
            <input type="email" placeholder="example: @test.com" name="mail" />
            <label>NAME</label>
            <input type="text" placeholder="example: Rajesh" name="yname" />
            <label>SUBJECT</label> 
            <input type="text" placeholder="The Reason" name="subject"/>
            <label>MESSAGE</label>
            <textarea placeholder="Your Message" rows="7" name="msg"></textarea>
            <button type="submit" name="send">SEND</button>
            
          </div>
    </div>
</body>
</html>