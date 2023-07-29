<?php include('server.php') ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="map.css">
    <link rel="stylesheet" href="Castro/final.css">
    <link rel="stylesheet" href="mapbox://styles/joebgreat/ckw7gp8tda7v114nx9kg7khjq">
    
    <title>Mapping</title>
    <script src="https://kit.fontawesome.com/bcf795cf99.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    

</head>
<body>
<form method="post" action="SomethingNew.php">
         <?php include('errors.php'); ?>
   <!--NAVIGATION--
<nav>

    <div class="logo">maptech</div>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Location</a></li>
        <li><a href="#">Map</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</nav>

>
   <!-*****************************************************************************-->
   <div class="bac">
   

    <p class="word">Difficult to Find a way</p>
    <p class=" one">No More</p>
    <div class = "v1"></div>
    <div class = "v2"></div>

    <div class="sent">In these present days, we will use Google Maps to find the locations and directions where you want to go, but there are a lot of places to confuse you. In these web-applications, we will know the nearest places to your location. </div>
    <div class="bbox">

     
    </div>
   

   </div>
   <div class="box11">
    <p class="heade">Knowing the route is the best way to planning</p>
    <hr>

    <div class="section1">
      <div class="point1">
          <h1>Location </h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus id repellendus sapiente. Saepe porro eaque rerum ipsam delectus necessitatibus doloribus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi praesentium reiciendis natus necessitatibus molestiae autem assumenda, ad nostrum doloribus aliquid. </p>
      </div>
      <div class="img1"></div>
      
  </div>
  <div class="section2">
      <div class="img2"></div>
      <div class="point2">
          <h1>Navigation </h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus id repellendus sapiente. Saepe porro eaque rerum ipsam delectus necessitatibus doloribus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi praesentium reiciendis natus necessitatibus molestiae autem assumenda, ad nostrum doloribus aliquid. </p>
      </div>
      
  </div>
  <div class="section3">
  
      <div class="point3">
          <h1>Navigation </h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus id repellendus sapiente. Saepe porro eaque rerum ipsam delectus necessitatibus doloribus! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi praesentium reiciendis natus necessitatibus molestiae autem assumenda, ad nostrum doloribus aliquid. </p>
      </div>
      <div class="img3"></div>
     </div>
    <!--
    <header class="box1">
        <div class = "st">
         <i class="fas fa-solid fa-car"></i>
           <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure, veritatis!Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, ducimus?Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, </p></div>
        <div class = "nd">
         <i class="fas fa-solid fa-car"></i>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, dolorum.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, ducimus?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi,</p></div>
          <div class = "rd"> 
            <i class="fas fa-solid fa-car"></i>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, officia?Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, ducimus?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ma</p></div>
      </header>-->
      
    
    
   </div>
   <div class="googlemap">
      <iframe id="mainmap" width='100%' height='400px' src="https://api.mapbox.com/styles/v1/joebgreat/ckw9jbb4m66w215p6c2toxe1j.html?title=false&access_token=pk.eyJ1Ijoiam9lYmdyZWF0IiwiYSI6ImNrdzNwb2cwbzBycDQydnA2Z2hwM3B3amQifQ.JcKuOCns0qxK5BArMJdOIQ&zoomwheel=true&fresh#16.77/12.971387/79.160144" title="Basic" style="border:none;"></iframe>
      <iframe id ="showmap" src="https://www.google.com/maps/d/embed?mid=1oZddqW4lvXjP4AG1cxtNTi-W9omCJalm" width="640" height="480"></iframe>
      <iframe id="showmap1"  width='100%' height='400px' src="https://api.mapbox.com/styles/v1/joebgreat/ckw8vpsv17xxg15o66b580n5c.html?title=view&access_token=pk.eyJ1Ijoiam9lYmdyZWF0IiwiYSI6ImNrdzNwb2cwbzBycDQydnA2Z2hwM3B3amQifQ.JcKuOCns0qxK5BArMJdOIQ&zoomwheel=true&fresh=true#9.7/12.6155/79.1494/0/10" title="Basic" style="border:none;"></iframe>
      <iframe id="vel-to-salem" width='100%' height='400px' src="https://api.mapbox.com/styles/v1/joebgreat/ckw9g8h7863uw15p6ofdxgjuu.html?title=false&access_token=pk.eyJ1Ijoiam9lYmdyZWF0IiwiYSI6ImNrdzNwb2cwbzBycDQydnA2Z2hwM3B3amQifQ.JcKuOCns0qxK5BArMJdOIQ&zoomwheel=true&fresh=true#7.87/12.282/78.872/7.2/61" title="Basic" style="border:none;"></iframe>
      <iframe id="vel-to-kanyakumari"  width='100%' height='400px' src="https://api.mapbox.com/styles/v1/castrojas/ckw9g8ssjbvqk14mpfdufbl4x.html?title=false&access_token=pk.eyJ1IjoiY2FzdHJvamFzIiwiYSI6ImNrdzJ0bXY0NmR3d3UzMHM3cWp5MWM0YzcifQ.ycxFYX7iLmn0L1GmpF_jbw&zoomwheel=true&fresh=true#7.74/10.533/78.592" title="Navigation" style="border:none;"></iframe>
      <iframe id="vel-to-pondicherry" width='100%' height='400px' src="https://api.mapbox.com/styles/v1/castrojas/ckwcazxdc258i15lc0tqfuyrt.html?title=false&access_token=pk.eyJ1IjoiY2FzdHJvamFzIiwiYSI6ImNrdzJ0bXY0NmR3d3UzMHM3cWp5MWM0YzcifQ.ycxFYX7iLmn0L1GmpF_jbw&zoomwheel=true&fresh=true#8.89/12.1942/80.1442/0/21" title="Basic" style="border:none;"></iframe>
   
     </div>
   
   <div class="map">
       
         
         <p class="Word"><!--MAP--></p><!--
        
        <label class="custom-field one">
            <input type="text" placeholder=" "/>
            <span class="placeholder">Enter Text</span>
           
          </label>
          <label for = "left" class="custom-field one">
            <input type="text" placeholder=" "/>
            <span class="placeholder">Enter Text</span>
           
          </label>
          <i class="fas fa-long-arrow-alt-right"></i>
  <i class="fas fa-long-arrow-alt-left"></i>
-->
<div class = cut-off>
   <form>
  <label class = "cutoff ">
   <select name="states" id="state0">
      <option value="from">From</option>
      <option value="Vellore">Vellore</option>   
      <option value="Tiruvannamalai">Tiruvannamalai</option>   
      <option value="Kancheepuram">Kancheepuram</option> </select>
       </label>
      <!-- <label class = "cutoff ">
         <div class="arrow"></div>
         </label>-->
       <label class = "cutoff">
         <select name="states" id="state1">
            <option value="to">To</option>
            <option value="Vellore">Vellore</option>   
            <option value="Tiruvannamalai">Tiruvannamalai</option>   
            <option value="Kancheepuram">Kancheepuram</option> 
            <option value="Kanyakumari">Kanyakumari</option>
            <option value="salem">salem</option> 
            <option value="pondicherry">pondicherry</option> </select>
            </label>
            <label class = "cutoff" id="arrow">→</label>
            <label class = "cutoff">

               <button type="button" onclick="get();" value="equal" id="res">»</button>
            </label>
       </form>
       </div>
<script>
       function get()
       {
         var a = document.getElementById('state0').value;
         var b = document.getElementById('state1').value;
        
         var oper = document.getElementById('res').value;
        
         if(oper === 'equal'){
                   
            if(a=="Vellore" && b=="Tiruvannamalai"){
               
               document.getElementById('mainmap').style="display: none;";
                     document.getElementById('showmap').style="display: block;";
                     document.getElementById('showmap1').style="display: none;";
                     document.getElementById('vel-to-salem').style="display: none;";
                     document.getElementById('vel-to-pondicherry').style="display: none;";
               document.getElementById('vel-to-kanyakumari').style="display: none;";
                   
                    
            }
           else if(a=="Kancheepuram" && b=="Vellore")
            {
               document.getElementById('showmap1').style="display: block;";
               document.getElementById('mainmap').style="display: none;";
               document.getElementById('showmap').style="display: none;";
               document.getElementById('vel-to-salem').style="display: none;";
               document.getElementById('vel-to-pondicherry').style="display: none;";
               document.getElementById('vel-to-kanyakumari').style="display: none;";
            }
                    
            else if(a=="Vellore" && b=="salem")              
            {
               document.getElementById('showmap1').style="display: none;";
               document.getElementById('mainmap').style="display: none;";
               document.getElementById('showmap').style="display: none;";
               document.getElementById('vel-to-salem').style="display: block;";
               document.getElementById('vel-to-kanyakumari').style="display: none;";
               document.getElementById('vel-to-pondicherry').style="display: none;";
            }      
            else if (a=="Vellore" && b=="Kanyakumari")
            {
               document.getElementById('showmap1').style="display: none;";
               document.getElementById('mainmap').style="display: none;";
               document.getElementById('showmap').style="display: none;";
               document.getElementById('vel-to-salem').style="display: none;";
               document.getElementById('vel-to-kanyakumari').style="display: block;";
               document.getElementById('vel-to-pondicherry').style="display: none;";
            }
            else if (a=="Vellore" && b=="pondicherry")
            {
               document.getElementById('showmap1').style="display: none;";
               document.getElementById('mainmap').style="display: none;";
               document.getElementById('showmap').style="display: none;";
               document.getElementById('vel-to-salem').style="display: none;";
               document.getElementById('vel-to-kanyakumari').style="display: none;";
               document.getElementById('vel-to-pondicherry').style="display: block;";
               
            }
            else if(a=="from" && b=="to")
            {
               document.getElementById('showmap1').style="display: none;";
               document.getElementById('mainmap').style="display: block;";
               document.getElementById('showmap').style="display: none;";
               document.getElementById('vel-to-salem').style="display: none;";
               document.getElementById('vel-to-kanyakumari').style="display: none;";
               document.getElementById('vel-to-pondicherry').style="display: none;";
               

            }
                    
                   
       
         }
       }
</script>
  <!--##################################ICON###############################-->
  
 <div class="iicon">
  <div class="wrapper">
    <div class="button">
       <div class="icon">
        <i class="fas fa-solid fa-cloud-moon-rain "></i>
       </div>
       <span>Weather</span>
    </div>
    <div class="button">
       <div class="icon">
       <i class="fas fa-traffic-light"></i>
       </div>
       <span>Traffic</span>
    </div>
    <div class="button">
       <div class="icon">
       <i class="fas fa-motorcycle"></i>
       </div>
       <span><a class="ola" href="Bikes.php" target="_blank">Bikes</span>
    </div>
    <div class="button">
       <div class="icon">
       <i class="fas fa-taxi"></i>
       </div>
       <span><a class="ola" href="Cab.php" target="_blank">cab</a></span>
    </div>
    <div class="button ">
       <div class="icon">
       <i class="fas fa-hotel"></i>
       </div>
       <span><a class="hotel" href="newhotel.php"target="_blank">Hotels</a></span>
    </div>

      
</div>







  <!-------------------------------------------------------------------------->




  <!-------------------------------------------------------------------------->

  </div>

   
</body>
</html>