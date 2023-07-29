<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxi</title>

    <link rel="stylesheet" type="text/css" href="cabstyles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&family=Poppins&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="62x62" href="images/icon.jpg">
</head>
<body>
    <form method="post" action="Cab.php">
        <?php include('errors.php'); ?>
    <header>
        <h1>Book A City Taxi To Your Destination In Town</h1>
        <h5>Choose from a range of categories and prices</h5>
    </header>
    <div  class="taxi-booking">
        <div class="switch-toggle">
            
            <a  class="taxi" href="">CITY TAXI</a>
            <a class="rentals" href="cabrentals.php">RENTALS</a>
        </div>

        <div class="taxi-specialities">
            <h4>Your everyday travel partner</h4>
            <p>AC Cabs for point to point travel</p>
        </div>  
        <div class="box">
        <form action="/" method="post">
            <div class="text-input">
                <label for="pickup" name="tdetails"><strong>PICKUP</strong></label>
                <input type="text" id="pickup" name="pick" placeholder="Current location">
               
            </div>

            <div class="text-input">
                <label for="drop" name="tdetails"><strong>DROP</strong></label>
                <input type="text" id="drop" name="drop" placeholder="Enter drop for ride estimate">
            </div>

            <div class="text-input">
                <label for="when" name="tdetails"><strong>WHEN</strong></label>
                <input type="time" id="when" name="time" placeholder="Now">
            </div>
            <button type="submit" class="submit-btn" name="cab-book">Search Cabs</button>
        </form>      
    </div> 
</div>
</body>
</html>