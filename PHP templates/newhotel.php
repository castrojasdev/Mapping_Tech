<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOTEL</title>

    <link rel="stylesheet" type="text/css" href="newhotel.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:wght@700&family=Poppins&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="62x62" href="images/icon.jpg">
</head>
<body>
<form method="post" action="newhotel.php">
                <?php include('errors.php'); ?>
    <header>
        <h5>welcome to stay for</h5>
        <h1>EXPERIENCE THE FREEDOM</h1>
    </header>
    <div  class="taxi-booking">
        <div class="switch-toggle">
            
            <a  class="taxi" href="">HOTELS</a>
        </div>

        <div class="taxi-specialities">
            <h4>Stay wherever you need</h4>
            <p></p>
        </div>  
        <div class="box">
        <form action="/" method="post">
            <div class="text-input">
                <label for="pickup" name="tdetails"><strong>NAME</strong></label>
                <input type="text" id="pickup" placeholder="Eg. Aravinth" name="name1">
            </div>

            <div class="text-input">
                <label for="drop" name="tdetails"><strong>CHECH IN</strong></label>
                <input placeholder="Date" class="form-control" type="text" onfocus="(this.type='date')" id="date" name="date3">
            </div>

            <div class="text-input">
                <label for="when" name="tdetails"><strong>CHECK OUT</strong></label>
                <input placeholder="Date" class="form-control" type="text" onfocus="(this.type='date')" id="date" name="date4">
            </div>
            <div class="text-input">
                <label for="when" name="tdetails"><strong>ROOMS</strong></label> 
                <input class="form-control" type="number" id="inlineFormCheck" placeholder="No.of Rooms" name="rooms">
            </div>
            <button type="submit" class="submit-btn" name="hotel">Search HOTELS</button>
        </form>      
    </div> 
   
</div>
<section class="my-5"> 
    <div class="container">
        <h1>EXPLORE...THE...HOTELS</h1>
        <div class="row">
            <div class="col1">
                <img src="images/hotel1.jpg" alt="ooty" width="300", height="200">
                <h4>COMFORT</h4>
                <p>No. of Beds : <strong>1 single bed</strong>  <br>
                Facilities : <strong> AC ,TV, WIFI</strong><br>
                Price : <strong> 1000 tk/night</strong></P>
                <a href="booking.php">BOOK</a>
                 
            </div>
            <div class="col2">
                <img src="images/hotel2.jpg" alt="coimbatore" width="300", height="200">
                <h4>FAMILY</h4>
                <p>No. of Beds : <strong>2 double bed</strong>   <br>
                Facilities : <strong> AC ,TV, WIFI, Balcony, Sofa</strong><br>
                Price : <strong> 3000 tk/night</strong></P>
                <a href="booking.php">BOOK</a>
            </div>
            <div class="col3">
                <img src="images/hotel3.jpg" alt="kodaikanal" width="300", height="200">
                <h4>DULEX</h4>
                <p>No. of Beds : <strong>2 single bed</strong>   <br>
                Facilities : <strong> AC ,TV, WIFI</strong> <br>
                Price : <strong> 2000 tk/night</strong></P>
                <a href="booking.php">BOOK</a>
            </div>
            <div class="col4">
                <img src="images/hotel4.jpg" alt="yercaud" width="300", height="200">
                <h4>SUPER DULEX</h4>
                <p>No. of Beds : <strong>2 double bed</strong>   <br>
                Facilities : <strong> AC ,TV, WIFI, Balcony, Sofa</strong><br>
                Price : <strong> 5000 tk/night</strong></P>
                <a href="booking.php">BOOK</a>
            </div>
        </div>
      </div>
</section>
</body>
</html>