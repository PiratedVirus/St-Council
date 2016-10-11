<?php
	ob_start();
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "students";

	include 'checkbox.php';

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	     die("Connection failed: " . $conn->connect_error);
	}

	if (isset($_POST['FE'])) {
		$fe = 'First Year';
	  } else {
	  	$fe = '';
	}

	if (isset($_POST['SE'])) {
		$se = 'Second Year';
	} else {
		$se = '';
	}

	if (isset($_POST['TE'])) {
	    $te = 'Third Year';
	} else {
		$te = '';
	}

	if (isset($_POST['BE'])) {
		$be = 'Final Year';
	} else {
		$be ='';
	}

	if (isset($_POST['CSE'])) {
		$cse = 'Computer Science And Engineering';
	} else {
		$cse ='';
	}

	if (isset($_POST['Mech'])) {
		$mech = 'Mechanical Engineering';
	} else {
		$mech ='';
	}

	if (isset($_POST['Civil'])) {
		$civil = 'Civil Engineering';
	} else {
		$civil ='';
	}

	if (isset($_POST['Entc'])) {
		$entc = 'Elctronics And Telecommunications';
	} else {
		$entc ='';
	}

	if (isset($_POST['Elect'])) {
		$elect = 'Electrical Engineering';
	} else {
		$elect ='';
	}

	if (isset($_POST['It'])) {
		$it = 'Information Technology';
	} else {
		$it ='';
	}

	if (isset($_POST['Mca'])) {
		$mca = 'MCA';
	} else {
		$mca ='';
	}

	if (isset($_POST['single-cse'])) {
			$query_cse = "SELECT * FROM users WHERE Skills = 'Computer Science And Engineering'";

			    $cse_result = $conn->query($query_cse);

			    if ($cse_result->num_rows > 0) {
			         echo "<table> <tr><th>ID</th> <th>Name</th> <th>Year</th></tr>";
			         // output data of each row
			         while($row = $cse_result->fetch_assoc()) {
			         	echo "<tr> <td> ".$row["userId"]." </td> <td> ".$row["userName"]." </td> <td>  ".$row["userEmail"]." </td> <td>".$row["Skills"]."</td> <td>".$row["academic_year"]."</td> <td>".$row["mobile"]."</td> <td>".$row["web"]."</td>  </tr>";
			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

		}

	if (isset($_POST['single-mech'])) {
			$query_mech = "SELECT * FROM users WHERE Skills = 'Mechanical Engineering'";

			    $mech_result = $conn->query($query_mech);

			    if ($mech_result->num_rows > 0) {
			         echo "<table> <tr><th>ID</th> <th>Name</th> <th>Year</th></tr>";
			         // output data of each row
			         while($row = $mech_result->fetch_assoc()) {
			         	echo "<tr> <td> ".$row["userId"]." </td> <td> ".$row["userName"]." </td> <td>  ".$row["userEmail"]." </td> <td>".$row["Skills"]."</td> <td>".$row["academic_year"]."</td> <td>".$row["mobile"]."</td>  </tr>";
			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

		}

	if (isset($_POST['single-civil'])) {
			$query_civil = "SELECT * FROM users WHERE Skills = 'Civil Engineering'";

			    $civil_result = $conn->query($query_civil);

			    if ($civil_result->num_rows > 0) {
			         echo "<table> <tr><th>ID</th> <th>Name</th> <th>Year</th></tr>";
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	echo "<tr> <td> ".$row["userId"]." </td> <td> ".$row["userName"]." </td> <td>  ".$row["userEmail"]." </td> <td>".$row["Skills"]."</td> <td>".$row["academic_year"]."</td> <td>".$row["mobile"]."</td> <td>".$row["web"]."</td>  </tr>";
			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

		}

	if (isset($_POST['single-entc'])) {
			$query_civil = "SELECT * FROM users WHERE Skills = 'Elctronics And Telecommunications'";

			    $civil_result = $conn->query($query_civil);

			    if ($civil_result->num_rows > 0) {
			         echo "<table> <tr><th>ID</th> <th>Name</th> <th>Year</th></tr>";
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	echo "<tr> <td> ".$row["userId"]." </td> <td> ".$row["userName"]." </td> <td>  ".$row["userEmail"]." </td> <td>".$row["Skills"]."</td> <td>".$row["academic_year"]."</td> <td>".$row["mobile"]."</td> <td>".$row["web"]."</td>  </tr>";
			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

		}

	if (isset($_POST['single-it'])) {
			$query_civil = "SELECT * FROM users WHERE Skills = 'Information Technology'";

			    $civil_result = $conn->query($query_civil);

			    if ($civil_result->num_rows > 0) {
			         echo "<table> <tr><th>ID</th> <th>Name</th> <th>Year</th></tr>";
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	echo "<tr> <td> ".$row["userId"]." </td> <td> ".$row["userName"]." </td> <td>  ".$row["userEmail"]." </td> <td>".$row["Skills"]."</td> <td>".$row["academic_year"]."</td> <td>".$row["mobile"]."</td> <td>".$row["web"]."</td>  </tr>";
			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

		}

	if (isset($_POST['single-elect'])) {
			$query_civil = "SELECT * FROM users WHERE Skills = 'Electrical Engineering'";

			    $civil_result = $conn->query($query_civil);

			    if ($civil_result->num_rows > 0) {
			         echo "<table> <tr><th>ID</th> <th>Name</th> <th>Year</th></tr>";
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	echo "<tr> <td> ".$row["userId"]." </td> <td> ".$row["userName"]." </td> <td>  ".$row["userEmail"]." </td> <td>".$row["Skills"]."</td> <td>".$row["academic_year"]."</td> <td>".$row["mobile"]."</td> <td>".$row["web"]."</td>  </tr>";
			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

		}

	if (isset($_POST['single-fe'])) {
			$query_civil = "SELECT * FROM users WHERE academic_year = 'First Year'";

			    $civil_result = $conn->query($query_civil);

			    if ($civil_result->num_rows > 0) {
			         echo "<table> <tr><th>ID</th> <th>Name</th> <th>Year</th></tr>";
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	echo "<tr> <td> ".$row["userId"]." </td> <td> ".$row["userName"]." </td> <td>  ".$row["userEmail"]." </td> <td>".$row["Skills"]."</td> <td>".$row["academic_year"]."</td> <td>".$row["mobile"]."</td> <td>".$row["web"]."</td>  </tr>";
			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

		}

	if (isset($_POST['single-se'])) {
			$query_civil = "SELECT * FROM users WHERE academic_year = 'Second Year'";

			    $civil_result = $conn->query($query_civil);

			    if ($civil_result->num_rows > 0) {
			         echo "<table> <tr><th>ID</th> <th>Name</th> <th>Year</th></tr>";
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	echo "<tr> <td> ".$row["userId"]." </td> <td> ".$row["userName"]." </td> <td>  ".$row["userEmail"]." </td> <td>".$row["Skills"]."</td> <td>".$row["academic_year"]."</td> <td>".$row["mobile"]."</td> <td>".$row["web"]."</td>  </tr>";
			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

		}

	if (isset($_POST['single-te'])) {
			$query_civil = "SELECT * FROM users WHERE academic_year = 'Third Year'";

			    $civil_result = $conn->query($query_civil);

			    if ($civil_result->num_rows > 0) {
			         echo "<table> <tr><th>ID</th> <th>Name</th> <th>Year</th></tr>";
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	echo "<tr> <td> ".$row["userId"]." </td> <td> ".$row["userName"]." </td> <td>  ".$row["userEmail"]." </td> <td>".$row["Skills"]."</td> <td>".$row["academic_year"]."</td> <td>".$row["mobile"]."</td> <td>".$row["web"]."</td>  </tr>";
			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

		}

	if (isset($_POST['single-be'])) {
			$query_civil = "SELECT * FROM users WHERE academic_year = 'Final Year'";

			    $civil_result = $conn->query($query_civil);

			    if ($civil_result->num_rows > 0) {
			         echo "<table> <tr><th>ID</th> <th>Name</th> <th>Year</th></tr>";
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			         	echo "<tr> <td> ".$row["userId"]." </td> <td> ".$row["userName"]." </td> <td>  ".$row["userEmail"]." </td> <td>".$row["Skills"]."</td> <td>".$row["academic_year"]."</td> <td>".$row["mobile"]."</td> <td>".$row["web"]."</td>  </tr>";
			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

		}

		$sql = "SELECT * FROM users WHERE (academic_year = '$fe' or academic_year = '$se' or academic_year = '$te' or academic_year = '$be') and ( Skills = '$cse' or Skills = '$mech' or Skills = '$civil' or Skills = '$entc' or Skills = '$it' or Skills = '$elect' ) ";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			 echo "<table> <tr><th>ID</th> <th>Name</th> <th>Year</th></tr>";
			 // output data of each row
			 while($row = $result->fetch_assoc()) {
				 echo "<tr> <td> ".$row["userId"]." </td> <td> ".$row["userName"]." </td> <td>  ".$row["userEmail"]." </td> <td>".$row["Skills"]."</td> <td>".$row["academic_year"]."</td> <td>".$row["mobile"]."</td> <td>".$row["web"]."</td>  </tr>";
			 }
			 echo "</table>";
		} else {
			 // echo "string in sql";
			 echo "0 results";
		}

	$checkboxes = "SELECT * FROM users WHERE app = '$app' OR web = '$web' OR photoshop ='$graphics' OR animation = '$animations' OR networking = '$networking' OR autocad = '$autocad' OR katia = '$katia' OR robocon ='$robocon' OR other = '$other' OR acting = '$act' OR dance = '$dance' OR ankering = '$anker' OR singing = '$sing' OR drama ='$drama' OR writing = '$writing' OR poetry = '$poetry' OR drawing = '$drawing' OR decoration ='$decoraction' OR painting ='$paint' OR cricket ='$cricket' OR badminton='$badminton' OR football ='$football' OR chess ='$chess' or kabbadi ='$kabbadi' OR vollyball ='$vollyball'";
	$result = $conn->query($checkboxes);

	if ($result->num_rows > 0) {
		 echo "<table> <tr><th>ID</th> <th>Name</th> <th>Year</th></tr>";
		 // output data of each row
		 while($row = $result->fetch_assoc()) {
			 echo "<tr> <td> ".$row["userId"]." </td> <td> ".$row["userName"]." </td> <td>  ".$row["userEmail"]." </td> <td>".$row["Skills"]."</td> <td>".$row["academic_year"]."</td> <td>".$row["mobile"]."</td> <td>".$row["web"]."</td>  </tr>";
		 }
		 echo "</table>";
	} else {
		 // echo "string in sql";
		 echo "0 results";
	}

	$conn->close();


?>
<!DOCTYPE html>
<html>
<head>

  <meta http-equiv="Content-Type" content="text/html"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

  <title>Welcome  Admin </title>
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


	<form action="sorting.php" class = "combo" method="POST">
		<div class="container">
			<div class="row">
				<div class="form-group combo-year col m3 s12 offset-m2">
					<p>

						<input type="checkbox" name="FE" id="fe">
						<label for="fe">First Year</label>
					</p>
					<p>

						<input type="checkbox" name="SE" id="se">
						<label for="se">Second Year</label>
					</p>
					<p>

						<input type="checkbox" name="TE" id="te">
						<label for="te">Third Year</label>
					</p>
					<p>

						<input type="checkbox" name="BE" id="be">
						<label for="be">Final Year</label>
					</p>
				</div>
				<a class="btn-floating btn-large waves-effect waves-light red mid-btn"><i class="material-icons">add</i></a>
				<div class="form-group combo-branch col m6 s12">
					<p>

						<input type="checkbox" name="CSE" id="cse">
						<label for="cse">Computer Science And Engineering</label>
					</p>
					<p>

						<input type="checkbox" name="Mech" id="mech">
						<label for="mech">Mechanical Engineering</label>
					</p>
					<p>

						<input type="checkbox" name="Civil" id="civil">
						<label for="civil">Civil Engineering</label>
					</p>
					<p>

						<input type="checkbox" name="Elect" id="elect">
						<label for="elect">Electrical Engineering</label>
					</p>
					<p>

						<input type="checkbox" name="Entc" id="entc">
						<label for="entc">Elctronics And Telecommunications</label>
					</p>
					<p>

						<input type="checkbox" name="It" id="it">
						<label for="it">Information Technology</label>
					</p>
					<input type="submit" value="Submit">
				</div>

			</div>
		</div>




	</form>

		<div class="container">
			<div class="row inline-form">
				<form action="" method="POST" name="singular">

					<input type="submit" class="imgbtn col m2 s4" value="Cse" name="single-cse">

				</form>

				<form action="" method="POST" name="singular">

					<input type="submit" class="imgbtn col m2 s4" value="Mech" name="single-mech">
						
				</form>

				<form action="" method="POST" name="singular">

					<input type="submit" class="imgbtn col m2 s4" value="Civil" name="single-civil">

				</form>

				<form action="" method="POST" name="singular">

					<input type="submit" class="imgbtn col m2 s4" value="EnTC" name="single-entc">

				</form>

				<form action="" method="POST" name="singular">

					<input type="submit" class="imgbtn col m2 s4" value="Elect" name="single-elect">

				</form>

				<form action="" method="POST" name="singular">

					<input type="submit" class="imgbtn col m2 s4" value="IT" name="single-it">

				</form>
			</div>

		</div>

		<form action="" method="POST" name="singular">

			<input type="submit" value="FE" name="single-fe">

		</form>

		<form action="" method="POST" name="singular">

			<input type="submit" value="SE" name="single-se">

		</form>

		<form action="" method="POST" name="singular">

			<input type="submit" value="TE" name="single-te">

		</form>

		<form action="" method="POST" name="singular">

			<input type="submit" value="BE" name="single-be">

		</form>

		<form method="post" name="multiple-check">


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
						<input type="submit" name="check" value="Sort">

		</form>

		 <script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>
	     <script src="../Assets/js/materialize.js"></script>
	     <script src="../Assets/js/init.js"></script>
	</body>
	</html>
