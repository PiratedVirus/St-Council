<?php
	ob_start();
	session_start();
  require_once 'dbconnect.php';
  // require_once 'fetch.php';


	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res);

	echo $_SESSION['stud_email'];
	echo $_SESSION['stud_name'];
	echo $_SESSION['stud_id'];


  $sql = "UPDATE users SET skills = 'val' WHERE userName ='".$_SESSION['stud_name']."'";


?>
