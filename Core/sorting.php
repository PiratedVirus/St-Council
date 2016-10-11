<?php
	ob_start();
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "students";

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



?>
<!DOCTYPE html>
<html>
<head>

  <meta http-equiv="Content-Type" content="text/html"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

  <title>Welcome  Admin </title>

  <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/> -->
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

		<?php

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

			    $conn->close();
			?>


		 ?>
		 <script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>
	     <script src="../Assets/js/materialize.js"></script>
	     <script src="../Assets/js/init.js"></script>
	</body>
	</html>
