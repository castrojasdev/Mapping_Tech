<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIKES</title>

    <link rel="stylesheet" type="text/css" href="Bikes.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&family=Poppins&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="62x62" href="images/icon.jpg">
</head>
<body>
    <form method="post" action="Bikes.php">
        <?php include('errors.php'); ?>
    <header>
        

        <h1>Book A City Bikes To Your Destination In Town</h1>
        <h5>Choose from a range of categories and prices</h5>
    </header>
    <div  class="taxi-booking">
        <div class="switch-toggle">
            <a  class="taxi" href="">CITY BIKES</a>
            <a class="rentals" href="bikerent.php">RENTALS</a>
        </div>

        <div class="taxi-specialities">
            <h4>Your everyday travel partner</h4>
            <p>Bikes for point to point travel</p>
        </div>  
        <div class="box">
        <form action="/" method="post">
            <div class="text-input">
                <label for="pickup" name="tdetails"><strong>PICKUP</strong></label>
                <input type="text" id="pickup" placeholder="Current location" name="pick">
            </div>

            <div class="text-input">
                <label for="drop" name="tdetails"><strong>DROP</strong></label>
                <input type="text" id="drop" placeholder="Enter drop for ride estimate" name="drop">
            </div>

            <div class="text-input">
                <label for="when" name="tdetails"><strong>WHEN</strong></label>
                <input type="time" id="when" placeholder="Now"  name="time">
            </div>
            <button type="submit" class="submit-btn"  name="cab-book">Search Bikes</button>
        </form>      
    </div> 
</div>
</body>
</html>