<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$desp="";
$idea="";
$bug="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO user (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: newmap.php');
  }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
        array_push( $errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
         
        
          header('location: newmap.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }

  
//*************************************************** */ SUGGEST USER****************************//
if (isset($_POST['suggest_idea'])) {
  // receive all input values from the form
  $idea = mysqli_real_escape_string($db, $_POST['idea']);
  $desp = mysqli_real_escape_string($db, $_POST['des']);
  $bug = mysqli_real_escape_string($db, $_POST['bug']);
  
 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($idea)) { array_push($errors, "Suggest Idea"); }
  if (empty($desp)) { array_push($errors, "Description is empty"); }
  if (empty($bug)) { array_push($errors, "Any bugs!!!!!"); }
 


  	$queryy = "INSERT INTO sugges (idea, des, bug) 
  			  VALUES('$idea', '$desp', '$bug')";
  	mysqli_query($db, $queryy);
  	$_SESSION['idea'] = $username;
    $_SESSION['success'] = "We will do";
    echo '<script>';
    echo 'var ask = 1;';
      echo 'if (ask==1) {';
        echo ' window.alert("Successfully saved!!");';
  
        echo'  window.location.href = "newmap.php";}';
          echo '</script>';
  
  }

  //*************************************************** */ Contact****************************//
if (isset($_POST['send'])) {
  // receive all input values from the form
  $mail = mysqli_real_escape_string($db, $_POST['mail']);
  $name = mysqli_real_escape_string($db, $_POST['yname']);
  $sub = mysqli_real_escape_string($db, $_POST['subject']);
  $msg = mysqli_real_escape_string($db, $_POST['msg']);
  
 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($mail)) { array_push($errors, "Enter the mail"); }
  if (empty($name)) { array_push($errors, "Name requires"); }
  if (empty($sub)) { array_push($errors, "Give any subject"); }
  if (empty($msg)) { array_push($errors, "Give a message"); }
 


  	$queryy =" INSERT INTO `contac`(`Email`, `Name`, `Subject`, `Message`)
     VALUES('$mail', '$name', '$sub','$msg')";
  	mysqli_query($db, $queryy);

    echo '<script>';
    echo 'var ask = 1;';
      echo 'if (ask==1) {';
        echo ' window.alert("Successfully saved!!");';
  
        echo'  window.location.href = "newmap.php";}';
          echo '</script>';
  }
  
//*************************************************** */ pickup****************************//

if (isset($_POST['cab-book'])) {
  // receive all input values from the form
  $idea = mysqli_real_escape_string($db, $_POST['pick']);
  $desp = mysqli_real_escape_string($db, $_POST['drop']);
  $bug = mysqli_real_escape_string($db, $_POST['time']);
  
 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($idea)) { array_push($errors, "pickup is necassary"); }
  if (empty($desp)) { array_push($errors, "Drop is empty"); }
  if (empty($bug)) { array_push($errors, "Time!!!!!"); }
 


  	$queryy = "INSERT INTO `cab-book`(`Pickup`, `Drop`, `Time`) 
  			  VALUES('$idea', '$desp', '$bug')";
  	mysqli_query($db, $queryy);
    header('location: searchcars.php');
  
  }
 //*************************************************** */ Cab****************************//
 $db2 = mysqli_connect('localhost', 'root', '', 'car');

 if (isset($_POST['book'])) {
  // receive all input values from the form
  $ide = mysqli_real_escape_string($db2, $_POST['name']);
  $des = mysqli_real_escape_string($db2, $_POST['phone']);
  $bu = mysqli_real_escape_string($db2, $_POST['car-mail']);
  $date1 = date('Y-m-d',strtotime( $_POST['date1']));
  $date2 = date('Y-m-d',strtotime($_POST['date2']));
  
 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($ide)) { array_push($errors, "nameis necassary"); }
  if (empty($des)) { array_push($errors, "mobile-number is empty"); }
  if (empty($bu)) { array_push($errors, "Mail!!!!!"); }
  if (empty($date1)) { array_push($errors, "Date!!!!!"); }
  if (empty($date2)) { array_push($errors, "Date!!!!!");}

 


    $queryy =" INSERT INTO `date`(`Name`, `Number`, `Mail`, `Start-data`, `End-date`)
    VALUES('$ide', '$des', '$bu','$date1','$date2')";
    mysqli_query($db2, $queryy);
    echo '<script>';
    echo 'var ask = 1;';
      echo 'if (ask==1) {';
        echo ' window.alert("Successfully Booked!!");';
  
        echo'  window.location.href = "booking.php";}';
          echo '</script>';

    //header('location: suggest-succ.php');

 }
  //*************************************************** */ Rent****************************//

 $db2 = mysqli_connect('localhost', 'root', '', 'car');

 if (isset($_POST['rent-book'])) {
  // receive all input values from the form
  $ide = mysqli_real_escape_string($db2, $_POST['location']);
  $des = mysqli_real_escape_string($db2, $_POST['hours']);
  $date1 = date('Y-m-d',strtotime( $_POST['start']));
  $date2 = date('Y-m-d',strtotime($_POST['end']));
  
 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($ide)) { array_push($errors, "loc is necassary"); }
  if (empty($des)) { array_push($errors, "hours is empty"); }
  if (empty($date1)) { array_push($errors, "Date!!!!!"); }
  if (empty($date2)) { array_push($errors, "Date!!!!!");}

 


    $queryy =" INSERT INTO `rent`(`City`, `Time`, `Start-date`, `End-date`) 
    VALUES('$ide', '$des','$date1','$date2')";
    mysqli_query($db2, $queryy);
    header('location: searchcars.php');

 }
 
  ////////////////////////////////////////////PAYMENT///////////////////////////////////////////
  $db = mysqli_connect('localhost', 'root', '', 'payment');
  if (isset($_POST['pay-sub'])) {
    $bank = mysqli_real_escape_string($db, $_POST['bank']);
    $card = mysqli_real_escape_string($db, $_POST['card']);
    $cvv = mysqli_real_escape_string($db, $_POST['cvv']);
    $pin = mysqli_real_escape_string($db, $_POST['pan']);
  /*
    if (empty($bank)) {
        array_push( $errors, "Username is required");
    }
    if (empty($card)) {
        array_push($errors, "Password is required");}
        
    if (empty($cvv)) {
      array_push($errors, "Password is required");}*/

      if (count($errors) == 0) {
       
        $query = "SELECT * FROM bank WHERE  Card='$card' AND pin='$pin'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
         
        
         echo '<script>';
        echo 'var ask = window.confirm("Are you confirm to book the bike?");';
          echo 'if (ask) {';
            echo ' window.alert("Successfully paid!!!");';
      
            echo'  window.location.href = "newmap.php";}';
              echo '</script>';
         // header('location: newmap.php');

         


        }
        else {
            array_push($errors, "Wrong username/password combination");
        }

    }
     ///////////////////////
     /*
          
   if (isset($_POST['subb'])){

   
    
    $pin = mysqli_real_escape_string($db, $_POST['pan']);
    $query = "SELECT * FROM bank WHERE cvv='$cvv' AND  pin='$pin'  ";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      echo "Welcome ".$cvv.$pin."!";
      header('location: newmap.php');

    }
    else {
      array_push($errors, "Wrong username/password combination");
  }
  
}//////////////////////////*/
          
  }
 
  //Hotel//////////////////////////////

  
  

 if (isset($_POST['hotel'])) {
  // receive all input values from the form
  $ide = mysqli_real_escape_string($db2, $_POST['name1']);
  $des = $_POST['rooms'];
  $date1 = date('Y-m-d',strtotime( $_POST['date3']));
  $date2 = date('Y-m-d',strtotime($_POST['date4']));
  
 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($ide)) { array_push($errors, "loc is necassary"); }
  if (empty($des)) { array_push($errors, "hours is empty"); }
  if (empty($date1)) { array_push($errors, "Date!!!!!"); }
  if (empty($date2)) { array_push($errors, "Date!!!!!");}

 


    $queryy =" INSERT INTO `hotell`(`Name`, `Check-in`, `Check-out`, `Room`) 
    VALUES('$ide','$date1','$date2', '$des')";
    mysqli_query($db2, $queryy);
    echo '<script>';
    echo 'var ask = 1;';
      echo 'if (ask==1) {';
        echo ' window.alert("Sorry!This page is under maintanance...");';
  
        echo'  window.location.href = "newmap.php";}';
          echo '</script>';
    //header('location: suggest-succ.php');

 }
 ///////////////////////////////


$conn =  mysqli_connect('localhost', 'root', '', 'sdv');

if (!$conn) { // If Check Connection
    die("<script>alert('Connection Failed.')</script>");
}


if (isset($_POST['bike-sub'])) {
  // receive all input values from the form
  $ide = mysqli_real_escape_string($db2, $_POST['location']);
  $des = mysqli_real_escape_string($db2, $_POST['hours']);
  $date1 = date('Y-m-d',strtotime( $_POST['start']));
  $date2 = date('Y-m-d',strtotime($_POST['end']));
  
 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($ide)) { array_push($errors, "loc is necassary"); }
  if (empty($des)) { array_push($errors, "hours is empty"); }
  if (empty($date1)) { array_push($errors, "Date!!!!!"); }
  if (empty($date2)) { array_push($errors, "Date!!!!!");}

 


    $queryy =" INSERT INTO `rent`(`City`, `Time`, `Start-date`, `End-date`) 
    VALUES('$ide', '$des','$date1','$date2')";
    mysqli_query($db2, $queryy);
    header('location: searchbike.php');

 }

 
 if (isset($_POST['book-bike'])) {
  // receive all input values from the form
  $ide = mysqli_real_escape_string($db2, $_POST['name']);
  $des = mysqli_real_escape_string($db2, $_POST['phone']);
  $bu = mysqli_real_escape_string($db2, $_POST['car-mail']);
  $date1 = date('Y-m-d',strtotime( $_POST['date1']));
  $date2 = date('Y-m-d',strtotime($_POST['date2']));
  
 

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($ide)) { array_push($errors, "nameis necassary"); }
  if (empty($des)) { array_push($errors, "mobile-number is empty"); }
  if (empty($bu)) { array_push($errors, "Mail!!!!!"); }
  if (empty($date1)) { array_push($errors, "Date!!!!!"); }
  if (empty($date2)) { array_push($errors, "Date!!!!!");}

 


    $queryy =" INSERT INTO `date`(`Name`, `Number`, `Mail`, `Start-data`, `End-date`)
    VALUES('$ide', '$des', '$bu','$date1','$date2')";
    mysqli_query($db2, $queryy);
    echo '<script>';
    echo 'var ask = 1;';
      echo 'if (ask==1) {';
        echo ' window.alert("Successfully Booked!!");';
  
        echo'  window.location.href = "booking.php";}';
          echo '</script>';

    header('location: booking.php');

 }


 
  ?>