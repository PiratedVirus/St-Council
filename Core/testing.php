<?php 
		require_once 'dbconnect.php';
		ob_start();
		session_start();
		
		if ( ! empty($_POST['branch'])){
		    $branch = $_POST['branch'];
		}
		

		if ( ! empty($_POST['email'])){
		    $email = $_POST['email'];
		}

		if ( ! empty($_POST['dob'])){
		    $dob = $_POST['dob'];
		}

		if ( ! empty($_POST['mobile'])){
		    $mobile = $_POST['mobile'];
		}
		
		if ( ! empty($_POST['year'])){
		    $year = $_POST['year'];
		}
		
		if ( ! empty($_POST['state'])){
		    $state = $_POST['state'];
		}

		if ( ! empty($_POST['res'])){
		    $res = $_POST['res'];
		}
		
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET userEmail = '$email' WHERE userName = '".$_SESSION['stud_name']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET Skills = '$branch' WHERE userName = '".$_SESSION['stud_name']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET dob = '$dob' WHERE userName = '".$_SESSION['stud_name']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET mobile = '$mobile' WHERE userName = '".$_SESSION['stud_name']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET academic_year = '$year' WHERE userName = '".$_SESSION['stud_name']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET state = '$state' WHERE userName = '".$_SESSION['stud_name']."'");
		    $sql_namenew = mysqli_query($conn,"UPDATE users SET local_hostel = '$res' WHERE userName = '".$_SESSION['stud_name']."'");

		    if (isset($_POST['web'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET Web = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		      } else {
		      	$fet = mysqli_query($conn,"UPDATE users SET Web = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }

		    // Checking App
		    if (isset($_POST['app'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET app = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET app = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }

		    // Checking graphics
		    if (isset($_POST['graphics'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET photoshop = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET photoshop = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }

		    // Checking animations
		    if (isset($_POST['animations'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET animation = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET animation = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking Networking
		    if (isset($_POST['Networking'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET networking = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET networking = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking Autocad
		    if (isset($_POST['Autocad'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET autocad = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET autocad = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking Katia
		    if (isset($_POST['Katia'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET katia = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET katia = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking Robocon
		    if (isset($_POST['Robocon'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET robocon = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET robocon = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking Other
		    if (isset($_POST['oOther'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET other = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET other = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking act
		    if (isset($_POST['act'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET acting = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET acting = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking dance
		    if (isset($_POST['dance'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET dance = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET dance = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking Ankering
		    if (isset($_POST['Ankering'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET ankering = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET ankering = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking Singing
		    if (isset($_POST['Singing'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET singing = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET singing = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking Drama
		    if (isset($_POST['Drama'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET drama = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET drama = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking Writing
		    if (isset($_POST['Writing'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET writing = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET writing = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking Poetry
		    if (isset($_POST['Poetry'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET poetry = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET poetry = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking Drawing
		    if (isset($_POST['Drawing'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET drawing = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET drawing = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking Decoraction
		    if (isset($_POST['Decoraction'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET decoraction = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET decoraction = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking Painting
		    if (isset($_POST['Painting'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET painting = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET painting = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking Cricket
		    if (isset($_POST['Cricket'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET cricket = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET cricket = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking Badminton
		    if (isset($_POST['Badminton'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET badminton = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET badminton = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking Football
		    if (isset($_POST['Football'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET football = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET football = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking check4
		    if (isset($_POST['Chess'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET chess = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET chess = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking Kabbadi
		    if (isset($_POST['Kabbadi'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET kabbadi = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET kabbadi = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking Vollyball
		    if (isset($_POST['Vollyball'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET vollyball = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET vollyball = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking Leader
		    if (isset($_POST['Leader'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET leader = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET leader = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }


		    // Checking Member
		    if (isset($_POST['Member'])) {
		        $fet = mysqli_query($conn,"UPDATE users SET member = '1' WHERE userId ='".$_SESSION['stud_id']."'");
		    } else {
		       $fet = mysqli_query($conn,"UPDATE users SET member = '0' WHERE userId ='".$_SESSION['stud_id']."'");
		    }
		

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

 	<nav id="menu">
     <div class="nav-wrapper">

       <ul id="slide-out" class="side-nav">
           <li><div class="userView">
             <img class="background" src="../Assets/img/2.jpg">
             <a href="#"><img class="circle" src="../Assets/img/user.png"></a>
             <a href="#"><span  class="black-text name slide-username"> <b><?php echo $_SESSION['stud_name']; ?></b></span></a>
             <a href="#"><span class="black-text email"><?php echo $_SESSION['stud_email']; ?></span></a>
           </div></li>
           <li><a href="#!"><img class="slideicon" src="../Assets/img/eye.png"  alt="">View Profile</a></li>
           <li><a href="edit.php"><img class="slideicon" src="../Assets/img/editpro.png"  alt="">Edit Profile</a></li>
           <li><a href="../logout.php?logout"><img class="slideicon" src="../Assets/img/logout.png"  alt="">Log Out</a></li>
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
       </div>
       
       <p class="success-update center"> <span class="success-update" id="main-msg">Profile Updated Successfully... :)</p>
     </div>
   </div>

   <div class="container">
   		<div class="row">
   			<div class="col 12">
					<div class="s12">
						<span class="final-name"><?php echo $_SESSION['stud_name'] ?></span>
					</div>   
					<div class="s6">
						<span class="final-enroll"><?php echo $_SESSION['stud_id'] ?>,</span>
						<span class="final-branch"><?php echo $year; ?></span>
					</div>				
					<div class="s12">
						<span class="final-branch"><?php echo $branch; ?></span>
					</div>	
					<div class="s12">
						<h6 class="final-mobile"><?php echo $mobile; ?></h6>
						<h6 class="final-dob"><?php echo $dob; ?></h6>
						<h6 class="final-email"><?php echo $email; ?></h6>
					</div>			
					<div class="s12">
						<p class="final-state"><?php echo $state; ?></p>
					</div>
   			</div>
   		</div>
   </div>


   <script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>  
   <script src="../Assets/js/materialize.js"></script>
   <script src="../Assets/js/init.js"></script>
  
	</html>
</body>


