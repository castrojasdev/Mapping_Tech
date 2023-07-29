<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="searchbike.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Search</title>
</head>
<body>
<form method="post" action="searchbikes.php">
        <?php include('errors.php'); ?>
    <h1>Available Bikes..</h1>
    <div class="content">
        <div class="car1">
            <img src="images/bike5.jpg" alt="" width="300" height="200">
            <div class="car11">
            <h2>Rating</h2>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
             <p>Name / Mode1: <strong> DOMINAR</strong><br>
                 Maximum speed : <strong>160 km/hr</strong> <br>
                 Price : <strong>1500 per day</strong> </p>
        </div>
        <div class="button">
            <a href="booking.html"> BOOK</a>
        </div>
    </div>
        <div class="car2">
            <img src="images/bike6.jpg" alt="" width="300" height="200">
            <div class="car22">
            <h2>Rating</h2>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star  checked"></span>
<span class="fa fa-star"></span>
             <p>Name / Mode1: <strong> HARLY DAVIDSON</strong><br>
                 Maximum speed : <strong>250 km/hr</strong> <br>
                 Price : <strong>2000 per day</strong> </p>

        </div>
        <div class="button">
            <a href="booking.php"> BOOK</a>
        </div>
    </div>
      
    </div>
    
</body>
</html>