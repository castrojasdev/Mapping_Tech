<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAR</title>

    <link rel="stylesheet" type="text/css" href="bikerentals1.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&family=Poppins&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="62x62" href="images/icon.jpg">
</head>
<body>
<form method="post" action="bikerentals1.php">
        <?php include('errors.php'); ?>
    <header>
        <h1>RENT BIKES</h1>
        <h5>Choose from a range of categories and prices</h5>
    </header>
    <div class="box">
        <div class="image"></div>
        <div class="content">
            <div class="box1">
                <form action="/" method="post">
                    <div class="text-input">
                        <label for="Full Name" name="tdetails"><strong>FULL NAME</strong></label>
                        <input type="text" id="pickup" placeholder="Enter your full name" name="name">
                    </div>
        
                    <div class="text-input">
                        <label for="Phone Number" name="tdetails"><strong>PHONE NUMBER</strong></label>
                        <input type="text" id="number" placeholder="Enter your phone number" name="phone">
                    </div>
                    <div class="text-input">
                        <label for="Enmail" name="tdetails"><strong>Email</strong></label>
                        <input type="email"  id="date" placeholder=" Enter your E-mail Address" name="car-mail">
                    </div>
        
                    <div class="text-input">
                        <label for="Start date" name="tdetails"><strong>START DATE</strong></label>
                        <input type="date"  id="date" placeholder=" Date when you need " name="date1">
                    </div>
                    <div class="text-input">
                        <label for="End date" name="tdetails"><strong>END DATE</strong></label>
                        <input type="date"  id="date" placeholder=" Date when you return " name="date2">
                    </div> 
                    
                    <a href="booking.php" type="submit" class="submit-btn" name="book-bike" >BOOK BIKE </a>
                </form>      
            </div> 
        </div>
    </div>
</body>
</html>