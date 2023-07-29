<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bookingstylee.css">
    <title>Payment</title>
</head>
<body>

    <div class="box">
    <form method="post" action="booking.php">
        <?php include('errors.php'); ?>
    
        <p>Make <strong>Payments</strong> Here </p>
        <h5>**/Only cards are accepted/**</h5>
        <div class="switch-toggle">
            <a class="Debit" href="#">Debit card</a>
            <a  class="Credit" href="#">Credit Card</a>
        </div>
        <div class="box1">
            <form action="" method="post">
                <div class="text-input">
                    <label for="pickup" name="tdetails"><strong>BANK NAME</strong></label>
                    <input type="text" id="pickup" placeholder="Enter your Bank Name" name="bank">
                </div>
                <div class="text-input">
                    <label for="pickup" name="tdetails"><strong>CARD NUMBER</strong></label>
                    <input type="text" id="pickup" placeholder="Enter your debit card number" name="card">
                </div>
    
                <div class="text-input">
                    <label for="drop" name="tdetails"><strong>CVV</strong></label>
                    <input type="text" id="drop" placeholder="Enter CVV number" name="cvv">
                </div>
                <div class="text-input">
                    <label for="drop" name="tdetails"><strong>PIN</strong></label>
                    <input type="text" id="drop" placeholder="Enter PIN number" name="pan">
                </div>
                <button class="submit-btn" name="pay-sub" href="" ><!--<a href="pin.html" target="_blank">--> Pay</a></button>
            </form> 
            </div>     
        
    </div>
    <div class="images"></div>
  
</body>
</html>