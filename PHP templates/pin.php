<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pin.css">
    <title>Document</title>
</head>
<body>
<form method="post" action="pin.php">
        <?php include('errors.php'); ?>
    <h1>Final Step..</h1>
    <p>***/ Fully Secured /***</p>
    <div class="content">
        <label for="Piin">PIN number</label>
        <input type="password" placeholder="Enter your pin number" name="pan">
    </div>
    <div class="button" id="pinn">
    <button type="submit" name="subb" id="bbb">PAY</button>
   <!-- <script>
        function get()
        {
          
           
         
        }
           
        </script>-->
</div>
</body>
</html>