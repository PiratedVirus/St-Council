<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';
  
  // if session is not set this will redirect to login page
  if( !isset($_SESSION['user']) ) {
    header("Location: ../index.php");
    exit;
  }
  
  // select loggedin users detail
  // $res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
  // $userRow=mysqli_fetch_array($res);

  
?>
<!DOCTYPE html>
<html>
<head>
  
  <meta http-equiv="Content-Type" content="text/html"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

  <title>Welcome  <?php echo $_SESSION['stud_name']; ?></title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <link rel="stylesheet" href="../Assets/css/base.css">
</head>
<body>



    <?php 
    require_once 'profile-form.php';
     ?>

    <a href="display.php">View Data</a>


     <script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>  
     <script src="../Assets/js/materialize.js"></script>  
     <!-- <script src="../Assets/js/init.js"></script> -->
    
</body>
</html>
<?php ob_end_flush(); ?>