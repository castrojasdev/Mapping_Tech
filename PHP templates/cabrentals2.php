<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAR</title>

    <link rel="stylesheet" type="text/css" href="cabrentals2.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&family=Poppins&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="62x62" href="images/icon.jpg">
</head>
<body>

    <header>
        <h1>RENT CARS</h1>
        <h5>Choose from a range of categories and prices</h5>
    </header>
    <div class="box">
        <div class="image"></div>
        <div class="content">
            <div class="box1">
            <form method="post" action="cabrentals2.php">
                <?php include('errors.php'); ?>
                    <div class="text-input">
                        <label for="Full Name" name="tdetails"><strong>FULL NAME</strong></label>
                        <input type="text"  name="name" id="pickup" placeholder="Enter your full name">
                    </div>
        
                    <div class="text-input">
                        <label for="Phone Number" name="tdetails"><strong>PHONE NUMBER</strong></label>
                        <input type="text"  name="phone" id="number" placeholder="Enter your phone number">
                    </div>
                    <div class="text-input">
                        <label for="Enmail" name="tdetails"><strong>Email</strong></label>
                        <input type="email"  name="car-mail" id="date" placeholder=" Enter your E-mail Address">
                    </div>
       
                    <div class="text-input">
                        <label for="Start date" name="tdetails"><strong>START DATE</strong></label>
                        <input type="date"  id="date"  name="date1" placeholder=" Date when you need ">
                    </div>
                    <div class="text-input">
                        <label for="End date" name="tdetails"><strong>END DATE</strong></label>
                        <input type="date" name="date2" id="date" placeholder=" Date when you return " >
                    </div> 
                    
                    <button type="submit" class="submit-btn" name="book">BOOK CAR</button>
                </form>      
            </div> 
        </div>
    </div>
</body>
</html>