<?php include('server.php') ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MAP TECH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="newmap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <form method="post" action="newmap.php">
      <?php include('errors.php'); ?>
    <nav class="nav">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">MAPTECH</label>
      <ul>
        <li> <a class="home" href="#">Home</a></li>
        <li> <a class="map" href="/MYPAGE/Project/SomethingNew.html" target="_blank">Map</a></li>
        <li>  <a class="login" href="indexx.php" target="_blank">Blog</a></li>
      
       <li> <a class="contact" href="contactus.php" target="_blank">Contact us</a></li>
      </ul>
    </nav>
    <section>
        <div class="newbox1">
            <div class="topic">
                <h1>MAPPING </h1>
                <h1>TECHNOLOGY</h1>
            </div>
        </div>
    </section>
    <div class="newbox2">
      <div class="newbooking">
     BOOKING
   </div>
   <div class="newlist">
       <li><a class="hotel" href="newhotel.php"target="_blank">HOTELS</a></li>
       <li><a class="ola" href="Cab.php" target="_blank">OLA</a></li>
       <li><a class="uber" href="Bikes.php" target="_blank">UBER</a></li>
   </div>
   <div class="newimages">
     <div class="hotels"></div>
     <div class="car"></div>
    <div class="bike"></div>
    </div>
  </div>
  <div class="newbox3">
    <div class="newhead"><h2>ABOUT US</h2></div>
    <div class="newcards">
        <div class="newcard1">
            <div class="card11"></div>
            <div class="balaji">
            <h3>BALAJI</h3>
            <br>
            <p>
            <p>19MIC0001<p><br>
              <p>Branch : Integrated Mtech CSE</p>
              <p>Collaboration : Virtusa</p><br>
            </p>
         </div>
         </div>
        <div class="newcard2">
            <div class="card22">
            </div>
            <div class="muzzamil">
            <h3>MUZZAMIL</h3>
            <br>
            <p><p>19MIC0061<p><br>
              <p>Branch : Integrated Mtech CSE</p>
              <p>Collaboration : Virtusa</p><br>
            </p></p>
         </div>
     </div>
        <div class="newcard3">
            <div class="card33">
            </div>
            <div class="nandha">
            <h3>NANDHA</h3>
            <br>
            <p><p>19MIC0019<p><br>
              <p>Branch : Integrated Mtech CSE</p>
              <p>Collaboration : Virtusa</p><br>
            </p></p>
         </div>
     
         </div>
        <div class="newcard4">
            <div class="card44">
            </div>
            <div class="castro">
            <h3>CASTRO</h3>
            <br>
            <p><p>19MIC0040<p><br>
              <p>Branch : Integrated Mtech CSE</p>
              <p>Collaboration : Virtusa</p><br>
            </p></p>
         </div>
    
         </div>
        
    </div>
</div>
<div class="newbox4">
<div class="newsuggestion">
  <a href="Suggestion1.php" target="_blank">SUGGEST ANY IDEA</a>
</div>
<p>&#9400copyright -- MAPPING TECHNOLOGY -- @VIT STUDENTS 2021</p></div>
  </body>
</html>