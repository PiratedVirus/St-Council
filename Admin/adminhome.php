<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';
  require_once '../core/fetch.php';

  
  // if session is not set this will redirect to login page
  if( !isset($_SESSION['user']) ) {
    header("Location: index.php");
    exit;
  }

  
  // select loggedin users detail
  $res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
  $userRow=mysqli_fetch_array($conn,$res);


  $sql = "UPDATE users SET skills = 'val' WHERE userName ='".$_SESSION['stud_name']."'";


?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Welcome  <?php echo $_SESSION['stud_name']; ?></title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Student Council</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Lorem</a></li>
            <li><a href="#">jQuery</a></li>
            <li><a href="#">PHP</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">

              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">

              <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $_SESSION['stud_name']; ?>&nbsp;<span class="caret"></span></a>

              <ul class="dropdown-menu">
                <li><a href="../logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse
      </div>
    </nav>  -->

  <div id="wrapper">

      <h3>Welcome Admin <?php echo $_SESSION['stud_name'] ?></h3>

      <div class="container">
      
        <div class="page-header">
          <!-- <h3>Hi Admin <?php echo $_SESSION['stud_name']; ?></h3> -->
        </div>
          
      
      </div>
    
  </div>

    
        <a href="../core/display.php">View Data</a>
        <a href="../core/edit.php">Edit </a>
        <a href="../core/sorting.php">Sort </a>

 
      <input type="text" value="<?php echo $_SESSION['stud_name'] ?>">
    <?php 
     ?>

     <div class="display">
       <h1><?php echo $_SESSION['stud_name'] ?></h1>
     </div>
    
    <?php 
         echo $_SESSION['stud_email'];
     ?>
     <?php 
         echo $_SESSION['stud_id'];
     ?>
     <?php echo "var"; ?>

           
           <?php 
               require '../core/chk.php';
            ?>



            <script src="../assets/js/jquery-1.11.3-jquery.min.js"></script>
            <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>
<?php ob_end_flush(); ?>