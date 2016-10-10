<?php

 ob_start();
 session_start();

 if( isset($_SESSION['user'])!="" ){
  header("Location: home.php");
 }


 include_once 'dbconnect.php';
 global $conn;



 $res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
 $error = false;



 if ( isset($_POST['btn-signup']) ) {

  // clean user inputs to prevent sql injections
  $name = trim($_POST['name']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);

  $enroll = trim($_POST['enroll']);
  $enroll = strip_tags($enroll);
  $enroll = htmlspecialchars($enroll);

  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);

  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);


  // $class = trim($_POST['class']);
  // $class = strip_tags($class);
  // $class = htmlspecialchars($class);

  $skill = trim($_POST['skill']);
  $skill = strip_tags($skill);
  $skill = htmlspecialchars($skill);

  // basic name validation
  if (empty($name)) {

   $error = true;
   $nameError = "Please enter your full name.";

  } else if (strlen($name) < 3) {

   $error = true;
   $nameError = "Name must have atleat 3 characters.";

  } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {

   $error = true;
   $nameError = "Name must contain alphabets and space.";

  }

  //Enrollment valditation

  if (empty($enroll)) {

   $error = true;
   $enrollError = "Please enter your enrollment number.";

  } else if (strlen($enroll) < 3) {

   $error = true;
   $enrollError = "enrollment number must have atleat 3 characters.";

  }

  //basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {

   $error = true;
   $emailError = "Please enter valid email address.";

  } else {

   // check email exist or not
   $query = "SELECT userEmail FROM users WHERE userEmail='$email'";

   $result = mysqli_query($conn,$query);
   $count = mysqli_num_rows($result);

   if($count!=0){

    $error = true;
    $emailError = "Provided Email is already in use.";

   }
  }


  // password validation
  if (empty($pass)){
   $error = true;
   $passError = "Please enter password.";

  } else if(strlen($pass) < 6) {

   $error = true;
   $passError = "Password must have atleast 6 characters.";

  }
  // skill validation

  if(empty($skill)){
    $error = true;
    $skillError = "Plese enter skills";
  } else if(strlen($skill) < 2) {

    $error = true;
    $skillError = "Don't fool Us";
  }

  // password encrypt using SHA256();
  $password = hash('sha256', $pass);

  // Gender
  $gender=$_POST['gender'];

  // if there's no error, continue to signup
  if( !$error ) {

   $query = "INSERT INTO users(userId,userName,userEmail,userPass,skills,gender) VALUES('$enroll','$name','$email','$password','$skill','$gender')";
   $res = mysqli_query($conn,$query);

   if ($res) {
    $errTyp = "success";
    $errMSG = "Successfully registered, you may login now";
    unset($name);
    unset($enroll);
    unset($email);
    unset($pass);
    unset($skill);
   } else {
    $errTyp = "danger";
    $errMSG = "Something went wrong, try again later...";
   }

  }


 }


?>
