<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIKE</title>

    <link rel="stylesheet" type="text/css" href="bikerentt.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&family=Poppins&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="62x62" href="images/icon.jpg">
</head>
<body>
    <form method="post" action="bikerent.php">
        <?php include('errors.php'); ?>
    <header>
        <h1>RENT BIKES</h1>
        <h5>Choose from a range of categories and prices</h5>
    </header>
    
    <div class="box1">
        <div class="images"></div>
    <div  class="taxi-booking">
        <div class="switch-toggle">
            
            <a  class="taxi" href="Bikes.php">CITY TAXI</a>
            <a class="rentals" href="">RENTALS</a>
        </div>

        <div class="taxi-specialities">
            <h4>Your everyday travel partner</h4>
            <p>Bikes for travel</p>
        </div>  
        <div class="box">
        <form action="/" method="post">
            <select class="loc" name="location" id="location">
                <option value="#" hidden>SELECT YOUR CITY</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Chennai">Chennai</option>
                <option value="Coimbatore">Coimbatore</option>
                <option value="Mumbai">Mumbai</option>
            </select>

            <select name="hours" id="hours">
                <option value="#" hidden>SELECT YOUR TIMING</option>
                <option value="Hourly">Hourly</option>
                <option value="Daily">Daily</option>
            </select>
            <div class="dates">

            <input placeholder="START DATE" class="textbox-n" type="text" name="start" onfocus="(this.type='date')" id="date">
            <input placeholder="END DATE" class="textbox-n" type="text" name="end" onfocus="(this.type='date')" id="date">
        </div>
    </form>   
    <button type="submit" class="submit-btn" name="bike-sub" ><a href = "bikerentals1.php" >Search BIKES</a></button>   
    </div> 
</div>
</div>
<div class="container">
    <h1>Explore Our BIKES</h1>
    <div class="row">
        <div class="col1">
            <a href="bikerentals1.php" target="_blank"><img src="images/bike1.jpg" alt="ooty" width="300", height="200"></a>
            <h4>Mustang</h4>  
        </div>
        <div class="col2">
           <a href=""><img src="images/bike2.jpg" alt="coimbatore" width="300", height="200"></a>
            <h4>Coimbatore</h4>
        </div>
        <div class="col3">
            <img src="images/bike3.jpg" alt="kodaikanal" width="300", height="200"></a>
            <h4>Kodaikanal</h4>
        </div>
        <div class="col4">
            <img src="images/bike4.jpg" alt="yercaud" width="300", height="200"></a>
            <h4>Yercaud</h4>
        </div>
    </div>
  </div>
</body>
</html>