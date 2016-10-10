 <!DOCTYPE html(lang='en')>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Student Council</title>
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
          <li><a href="Core/edit.php"><img class="slideicon" src="../Assets/img/editpro.png"  alt="">Edit Profile</a></li>
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

<div class="container">
	<div class="row">
	    <form name='form' method="POST" action="testing.php" class="col s12">

		    <?php

		      require_once 'dbconnect.php';
		      ob_start();
		      session_start();

		    ?>



		      <div class="row">

		    	<div class="input-field col s12">
		    	  <input id="icon_prefix" type="text" name="name" value="<?php echo $_SESSION['stud_name'] ?>" class="validate">
		    	  <label for="icon_prefix">Name</label>
		    	</div>

		        <div class="input-field col s6">
		          <input id="icon_prefix" type="text" name="enrollment" value="<?php echo $_SESSION['stud_id'] ?>" class="validate">
		          <label for="icon_prefix">Enrollment Number</label>
		        </div>

 				<!-- ++++++++++ Unique values ends here  +++++++ -->
				<!-- Never modify names of any of these inputs.They are further linked in testing.php -->
				<!-- Not passing entries of Name and Enrollment number for editing, since they r unique -->
				<!-- consider skills as BRANCH in whole project -->


		        <div class="input-field col s6">
		          <input id="icon_prefix" type="text" name="branch" value="<?php echo $_SESSION['stud_skills'] ?>" class="branch-edit validate">
		          <label for="icon_prefix">Branch</label>
		        </div>

		        <div class="input-field col s12">
		          <input id="icon_prefix" type="email" name="email" value="<?php echo $_SESSION['stud_email'] ?>" class="validate">
		          <label for="icon_prefix">Email</label>
		        </div>



		        <div class="input-field col s12 m6">
		          <input id="icon_telephone" type="tel" name="mobile" value="<?php echo $_SESSION['stud_mobile'] ?>" class="validate">
		          <label for="icon_telephone">Mobile Number</label>
		        </div>
		        <div class="input-field col m6 s12">
		          <label for="birthdate">Birth Date</label>
		          <input id="birthdate" type="date" name="dob" value="<?php echo $_SESSION['stud_dob'] ?>" class="datepicker">
		        </div>

		        <div class="input-field col s12 m6">
		          <input id="icon_prefix" type="text" name="year" value="<?php echo $_SESSION['stud_academic_year'] ?>" class="year">
		          <label for="icon_prefix">Academic Year</label>
		        </div>


		        <div class="input-field col m6 s12">
		          <input id="icon_prefix" type="text" name="state" value="<?php echo $_SESSION['stud_state'] ?>" class="state">
		          <label for="icon_prefix">State</label>
		        </div>

		        <div class="input-field gender col s12">
		            <span id="male-radio">
		                <input type="radio" name="res" value="Localite" class="with-gap" id="male" />
		                <label for="male">Localite</label>
		            </span>
		            <span>
		                <input type="radio" name="res" value="Hostelite" class="with-gap" id="female" />
		                <label for="female">Hostelite</label>
		            </span>

		        </div>


		        <div class="row ">

			          <div class="col s12">
				            <ul class="tabs tab-holder" style="width: 100%;margin: 60px 0px 20px 0px;">
				              <li class="tab col s3"><a href="#technical">Technical</a></li>
				              <li class="tab col s3"><a href="#Social">Social</a></li>
				              <li class="tab col s3"><a href="#Sports">Sports</a></li>
				              <li class="tab col s3"><a href="#Managment">Management</a></li>
				            </ul>
			          </div>

			          <div id="technical" class="col s12">
			          		<p class="col m4 s6">
			          	      <input type="checkbox" name="web" id="web" />
			          	      <label for="web">Web Designing and Developing</label>
			          	    </p>

			          	  <!--   <p class="col m4 s6">
			          	      <input type="checkbox" name="app" id="App"  />
			          	      <label for="app">App Developing</label>
			          	    </p> -->

			          	    <p class="col m4 s6">
			          	      <input type="checkbox" name="graphics" id="graphics"  />
			          	      <label for="graphics">Photoshop / Illustrator </label>
			          	    </p>

			          	    <p class="col m4 s6">
			          	      <input type="checkbox" name="app" id="app"  />
			          	      <label for="app">App Developing </label>
			          	    </p>

			          	    <p class="col m4 s6">
			          	      <input type="checkbox" name="animations" id="animations"  />
			          	      <label for="animations">Animations</label>
			          	    </p>
			          	    <p class="col m4 s6">
			          	      <input type="checkbox" name="Networking" id="Networking"  />
			          	      <label for="Networking">Networking</label>
			          	    </p>

			          	    <p class="col m4 s6">
			          	      <input type="checkbox" name="Autocad" id="Autocad"  />
			          	      <label for="Autocad">Autocad</label>
			          	    </p>

			          	    <p class="col m4 s6">
			          	      <input type="checkbox" name="Katia" id="Katia"  />
			          	      <label for="Katia">Katia</label>
			          	    </p>

			          	    <p class="col m4 s6">
			          	      <input type="checkbox" name="Robocon" id="Robocon"  />
			          	      <label for="Robocon">Robocon</label>
			          	    </p>

			          	    <p class="col m4 s6">
			          	      <input type="checkbox" name="Other..." id="Other..."  />
			          	      <label for="Other...">Other...</label>
			          	    </p>
			          </div>

			          <div id="Social" class="col s12">
							<p class="col m4 s6">
						      <input type="checkbox" name="act" id="act" />
						      <label for="act">Acting</label>
						    </p>

						    <p class="col m4 s6">
						      <input type="checkbox" name="dance" id="dance"  />
						      <label for="dance">Dance</label>
						    </p>

						    <p class="col m4 s6">
						      <input type="checkbox" name="Ankering" id="Ankering"  />
						      <label for="Ankering">Ankering / Hosting</label>
						    </p>

						    <p class="col m4 s6">
						      <input type="checkbox" name="Singing" id="Singing"  />
						      <label for="Singing">Singing</label>
						    </p>

						    <p class="col m4 s6">
						      <input type="checkbox" name="Drama" id="Drama"  />
						      <label for="Drama">Drama</label>
						    </p>

						    <p class="col m4 s6">
						      <input type="checkbox" name="Writing" id="Writing"  />
						      <label for="Writing">Writing</label>
						    </p>

						    <p class="col m4 s6">
						      <input type="checkbox" name="Poetry" id="Poetry"  />
						      <label for="Poetry">Poetry</label>
						    </p>
						    <p class="col m4 s6">
						      <input type="checkbox" name="Drawing" id="Drawing"  />
						      <label for="Drawing">Drawing</label>
						    </p>
						    <p class="col m4 s6">
						      <input type="checkbox" name="Decoraction / Design" id="Decoraction / Design"  />
						      <label for="Decoraction / Design">Decoraction / Design</label>
						    </p>
						    <p class="col m4 s6">
						      <input type="checkbox" name="Painting" id="Painting"  />
						      <label for="Painting">Painting</label>
						    </p>
			           </div>

			          <div id="Sports" class="col s12">
				          	<p class="col m4 s6">
				          	  <input type="checkbox" name="Cricket" id="Cricket"  />
				          	  <label for="Cricket">Cricket</label>
				          	</p>
				          	<p class="col m4 s6">
				          	  <input type="checkbox" name="Badminton" id="Badminton"  />
				          	  <label for="Badminton">Badminton</label>
				          	</p>
				          	<p class="col m4 s6">
				          	  <input type="checkbox" name="Football" id="Football"  />
				          	  <label for="Football">Football</label>
				          	</p>
				          	<p class="col m4 s6">
				          	  <input type="checkbox" name="Chess" id="Chess"  />
				          	  <label for="Chess">Chess</label>
				          	</p>
				          	<p class="col m4 s6">
				          	  <input type="checkbox" name="Kabbadi" id="Kabbadi"  />
				          	  <label for="Kabbadi">Kabbadi</label>
				          	</p>
				          	<p class="col m4 s6">
				          	  <input type="checkbox" name="Vollyball" id="Vollyball"  />
				          	  <label for="Vollyball">Vollyball</label>
				          	</p>
			         </div>

			          <div id="Managment" class="col s12">
				          	<p class="col m4 s6">
				          	  <input type="checkbox" name="Leader" id="Leader"  />
				          	  <label for="Leader">Leader</label>
				          	</p>
				          	<p class="col m4 s6">
				          	  <input type="checkbox" name="Member" id="Member"  />
				          	  <label for="Member">Member</label>
				          	</p>
			          </div>

		        </div>

		        <div class="input-field col s12">
		          <input id="after" name="after" type="text" class="after ">
		          <label for="after">After GECA (PG / Job..) </label>
		        </div>


			<div class="center update-button">

		        <button class="btn waves-effect waves-light" type="submit" name="update" style="
			    margin-top: 50px;">UPDATE
		          <!-- <i class="material-icons right">send</i> -->
		        </button>
			</div>


		      </div>
	    </form>
	</div>
	<!-- Form for the fetch and select functions -->
	<form>
		<input type="submit" class="button" name="insert" value="insert" />
		<input type="submit" class="button" name="select" value="select" />
	</form>


	<!-- Form for the dummy text form checking -->
<!-- 	<form name='form' method='post' action="testing.php">
		Name: <input type="text" name="namenew" id="namenew" ><br/>
		<input id="icon_prefix" type="text" name="enrollment" value="<?php echo $_SESSION['stud_id'] ?>" class="validate">
		<label for="icon_prefix">Enrollment Number</label>

		<input id="icon_prefix" type="text" name="dob" placeholder="dob" class="validate">
		<label for="icon_prefix">DOB</label>

		<input id="icon_prefix" type="text" name="mobile" placeholder="Mobile number" class="validate">
		<label for="icon_prefix">mobile Number</label>

		<input type="submit" name="submit" value="Submit">
	</form>
 -->

	<?php
	    if(isset($_GET['insert'])){
	        fetcher();
	    }
	    if(isset($_GET['select'])){
	        select();
	        printer();
	    }

	    function select()
		    {
		       echo "The select function is called.";

		    }

	    function insert()
		    {
		       echo "The insert function is called.";
		    }

		function printer() {

				echo "this  from profile-form	";
				$temp_mail = $_POST['email'];
				print($temp_mail);
				print($_POST['name']);
			    echo $temp_mail;
				$temp_id = $_POST['id'];
			    echo $temp_id;
			    echo "	nothing print";
			  	echo "	asdf";
		}

		function fetcher() {
		    define('DB_NAME','students');
		    define('DB_USER', 'root');
		    define('DB_PASSWORD', '');
		    define('DB_HOST', 'localhost');

		    ob_start();
		    session_start();


		    $link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD);

		    if(!$link){
		        die('Cant connect' .mysqli_error());
		    }

		    $db_sel = mysqli_select_db($link, DB_NAME);

		    if(!$db_sel) {
		        die('cant use' .DB_NAME. ':' .mysqli_error());
		    }

		       	   $skill = $_POST['skills'];
		           $songs = $_POST['song'];
		           $year = $_POST['class'];
		           $age = $_POST['age'];
		           $ur = $_POST['urself'];
		           $clg = $_POST['branch'];
		           $mail = $_POST['email'];

		           echo "email from fetcher function		";
		           echo $mail;


		           echo $_SESSION['stud_email'];
		           echo "	Name from fetcher function		";
		           echo $_SESSION['stud_name'];

		           //$sql = "INSERT INTO cabel (name,lastname) VALUES ('$val','$mal')";
		           $sql_skill = "UPDATE users SET skills = '$skill' WHERE userName = '".$_SESSION['stud_name']."'";
		           $sql_songs = "UPDATE users SET song = 'songs' WHERE userName = '".$_SESSION['stud_name']."'";
		           $sql_year = "UPDATE users SET class = 'year' WHERE userName = '".$_SESSION['stud_name']."'";
		           $sql_age = "UPDATE users SET age = 'age' WHERE userName = '".$_SESSION['stud_name']."'";
		           $sql_ur = "UPDATE users SET urself = 'ur' WHERE userName = '".$_SESSION['stud_name']."'";
		           $sql_clg = "UPDATE users SET branch = 'clg' WHERE userName = '".$_SESSION['stud_name']."'";

		           //$sql = "UPDATE users SET skills = '".$_SESSION['stud_email']."' WHERE userName ='".$_SESSION['stud_name']."'";



		           if(!mysqli_query($link,$sql_skill)) {
		               die('Err:' .mysqli_error($link));
		           }

		           if(!mysqli_query($link,$sql_songs)) {
		               die('Err:' .mysqli_error($link));
		           }
		           if(!mysqli_query($link,$sql_year)) {
		               die('Err:' .mysqli_error($link));
		           }
		           if(!mysqli_query($link,$sql_age)) {
		               die('Err:' .mysqli_error($link));
		           }
		           if(!mysqli_query($link,$sql_ur)) {
		               die('Err:' .mysqli_error($link));
		           }
		           if(!mysqli_query($link,$sql_clg)) {
		               die('Err:' .mysqli_error($link));
		           }


		           mysqli_close($link);
		}

	 ?>
</div>



<script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>
<script src="../Assets/js/materialize.js"></script>
<script src="../Assets/js/init.js"></script>
</body>
</html>
