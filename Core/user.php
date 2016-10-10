<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// it will never let you open index(login) page if session is set
	if ( isset($_SESSION['user'])!="" ) {
		header("Location: home.php");
		exit;
	}
	
	$error = false;
	
	if( isset($_POST['user-login']) ) {	
		

		$id = trim($_POST['id']);
		$id = strip_tags($id);
		$id = htmlspecialchars($id);
		
		$pass = trim($_POST['pass']);
		$pass = strip_tags($pass);
		$pass = htmlspecialchars($pass);
		// prevent sql injections / clear user invalid inputs
		
		if(empty($id)){
			$error = true;
			$idError = "Please enter your Enrollment Number.";
		} 
		
		if(empty($pass)){
			$error = true;
			$passError = "Please enter your password.";
		}
		
		// if there's no error, continue to login
		if (!$error) {
			
			$password = hash('sha256', $pass); // password hashing using SHA256
		
			//passing array for retring whole info
			$res=mysqli_query($conn,"SELECT userId, userName, userPass FROM users WHERE userId='$id'");
			$row=mysqli_fetch_array($res);
			$count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row




			//passing array for retring whole info
			$get = mysqli_query($conn,"SELECT * FROM users WHERE userId='$id'");
			$arr = mysqli_fetch_array($get);

			// Below 4 values are unique, don't disturb them....
			$user_name = $arr['userName'];
			$user_email = $arr['userEmail'];
			$user_id = $arr['userId'];
			$user_pass = $arr['userPass'];

			$_SESSION['stud_name'] = $user_name;
			$_SESSION['stud_email'] = $user_email;
			$_SESSION['stud_id'] = $user_id;
			$_SESSION['stud_pass'] = $user_pass;
			// Above 4 values are unique, don't disturb them....

			// New updations cols should appear here
			$user_skills = $arr['Skills'];
			$user_mobile = $arr['mobile'];
			$user_academic_year = $arr['academic_year'];
			$user_dob = $arr['dob'];
			$user_state = $arr['state'];

			$_SESSION['stud_skills'] = $user_skills;
			$_SESSION['stud_mobile'] = $user_mobile;
			$_SESSION['stud_academic_year'] = $user_academic_year;
			$_SESSION['stud_dob'] = $user_dob;
			$_SESSION['stud_state'] = $user_state;

			// Legacy, Deleted before public release (for testing purpose..)
			$user_class = $arr['class'];
			$user_song = $arr['song'];
			$user_age = $arr['age'];
			$user_urself = $arr['urself'];
			$user_branch = $arr['branch'];

			$_SESSION['stud_class'] = $user_class;
			$_SESSION['stud_song'] = $user_song;
			$_SESSION['stud_age'] = $user_age;
			$_SESSION['stud_urself'] = $user_urself;
			$_SESSION['stud_branch'] = $user_branch;




			if( $count == 1 && $row['userPass']==$password ) {
				$_SESSION['user'] = $row['userId'];
				header("Location: home.php");

			} else {
				$errMSG = "Incorrect Credentials, Try again...";
			}
				
		}
		
	}
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

	<div class="row">
    	<form class="col m6 s12 offset-m3" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    
    	<div class="col  s12">
        
	            <?php
					if ( isset($errMSG) ) {
						
					?>
		            	<div class="incorrect-det">
							<span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
		                </div>
		                <?php
					}
				?>
	
            <div class="input-field">
            	<input type="text" name="id" id="label-enroll-stud" class="validate" length="11" value="<?php echo $id; ?>" maxlength="11" />
            	<label for="label-enroll-stud" data-error = "<?php echo $idError; ?>">Enrollment Number</label>
            	<span class="text-danger"><?php echo $idError; ?></span>
            </div>

            <div class="input-field">
            	<input type="password" name="pass" id="label-pass" class="form-control" maxlength="15" />
            	<label for="label-pass" data-error = "<?php echo $idError; ?>">Password</label>
            	<span class="text-danger"><?php echo $passError; ?></span>

            </div>
            
            
            <button type="submit" class="btn btn-block btn-primary" name="user-login">Log In</button>
        
    	</div>

    </form>
</div>	
</body>
</html>
