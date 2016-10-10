<?php 

    ob_start();
    session_start();

 ?>
<!DOCTYPE html>
<html>
<head>

  <meta http-equiv="Content-Type" content="text/html"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

  <title>Welcome  <?php echo $_SESSION['stud_name']; ?></title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <link rel="stylesheet" href="Assets/css/base.css">
</head>
<body>

	<nav id="menu">
    <div class="nav-wrapper">

      <ul id="slide-out" class="side-nav">
          <li><div class="userView">
            <img class="background" src="Assets/img/2.jpg">
            <a href="#"><img class="circle" src="Assets/img/user.png"></a>
            <a href="#"><span  class="black-text name slide-username"> <b><?php echo $_SESSION['stud_name']; ?></b></span></a>
            <a href="#"><span class="black-text email"><?php echo $_SESSION['stud_email']; ?></span></a>
          </div></li>
          <li><a href="#!"><img class="slideicon" src="Assets/img/eye.png"  alt="">View Profile</a></li>
          <li><a href="Core/edit.php"><img class="slideicon" src="Assets/img/editpro.png"  alt="">Edit Profile</a></li>
          <li><a href="logout.php?logout"><img class="slideicon" src="Assets/img/logout.png"  alt="">Log Out</a></li>
          <li><div class="divider"></div></li>
          <li><a class="waves-effect" href="#">Events</a></li>
          <li><a class="waves-effect" href="#">Something</a></li>
      </ul>

      <a href="#" id="user-menu" data-activates="slide-out" class="button-collapse">
      <i class="material-icons">menu</i></a>

      <a href="#" class="brand-logo center">Student Council</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
      

    </div>
  </nav>

  <div class="row user-name teal">
    <div class="container">
      <div class="col s12 left1">
        <h1>Hi <?php echo $_SESSION['stud_name'] ?> </h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row user-body">
      <div class="col s12 center">
        <a class="waves-effect waves-light btn-large update-btn" href="core/edit.php">UPDATE PROFILE</a>
      </div>
      
      <p class="nothnig-to-show gray left"> <span id="main-msg">Sorry..! Right Now there's nothing to show :( </span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere impedit maxime at reiciendis perspiciatis perferendis, consequuntur recusandae voluptatum tempora eaque?</p>
    </div>
  </div>
	

   <div class="display">
       <h6><?php echo $_SESSION['stud_name'] ?></h6>
     </div>
    
    <?php 
         echo $_SESSION['stud_email'];
     ?>
      <h7>Hi <?php echo $_SESSION['stud_name']; ?></h7>
     <?php 
         echo $_SESSION['stud_id'];
     ?>
     <input type="text" value="<?php echo $_SESSION['stud_name'] ?>">

    <?php echo "var"; ?>

           
           <?php 
               require 'core/chk.php';
            ?> 




    <script src="Assets/js/jquery-1.11.3-jquery.min.js"></script>  
    <script src="Assets/js/materialize.js"></script>  
    <script src="Assets/js/init.js"></script>
    
</body>
</html>
<?php ob_end_flush(); ?>