<?php 

require_once 'dbconnect.php';


// Checking check1
if (isset($_POST['web'])) {
    $fet = mysqli_query($conn,"UPDATE users SET Web = '1' WHERE userId ='".$_SESSION['stud_id']."'");
  } else {
  	$fet = mysqli_query($conn,"UPDATE users SET Web = '0' WHERE userId ='".$_SESSION['stud_id']."'");
}

// Checking App
if (isset($_POST['App'])) {
    $fet = mysqli_query($conn,"UPDATE users SET App = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    echo "App 1";
} else {
   $fet = mysqli_query($conn,"UPDATE users SET App = '0' WHERE userId ='".$_SESSION['stud_id']."'");
   echo "App 0";
}

// Checking graphics
if (isset($_POST['graphics'])) {
    $fet = mysqli_query($conn,"UPDATE users SET graphics = '1' WHERE userId ='".$_SESSION['stud_id']."'");
} else {
   $fet = mysqli_query($conn,"UPDATE users SET graphics = '0' WHERE userId ='".$_SESSION['stud_id']."'");
}

// Checking animations
if (isset($_POST['animations'])) {
    $fet = mysqli_query($conn,"UPDATE users SET Animations = '1' WHERE userId ='".$_SESSION['stud_id']."'");
} else {
   $fet = mysqli_query($conn,"UPDATE users SET Animations = '0' WHERE userId ='".$_SESSION['stud_id']."'");
}


// Checking Networking
if (isset($_POST['Networking'])) {
    $fet = mysqli_query($conn,"UPDATE users SET Networking = '1' WHERE userId ='".$_SESSION['stud_id']."'");
} else {
   $fet = mysqli_query($conn,"UPDATE users SET Networking = '0' WHERE userId ='".$_SESSION['stud_id']."'");
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
<html>	


<!-- <form  method="POST"> -->
		
		<!-- <div class="form-group">
			 <hr />
			 <input type="checkbox" name="check1">Web Designer
			 <input type="checkbox" name="check2">App Designer
			 <input type="checkbox" name="check3">Graphics Designer
			 <input type="checkbox" name="check4">Singer
		</div>



		<input type="submit" value="Update"> -->
<!-- </form> -->

</html>





