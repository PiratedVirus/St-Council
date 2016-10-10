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

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <link rel="stylesheet" href="../Assets/css/base.css">
</head>
<body>

		<form action="sorting.php" method="POST">



					<div class="form-group">
						 <hr />
						 <input type="checkbox" name="FE" id="fe">
						 <label for="fe">First Year</label>
						 <input type="checkbox" name="SE" id="se">
						 <label for="se">Second Year</label>
						 <input type="checkbox" name="TE" id="te">
						 <label for="te">Third Year</label>
						 <input type="checkbox" name="BE">
						 <label for="be">Final Year</label>




					</div>
					<div class="form-group">
						 <hr />
						 <input type="checkbox" name="CSE" id="cse">
						 <label for="cse">Computer Science And Engineering</label>
						 <input type="checkbox" name="Mech" id="mech">
						 <label for="mech">Mechanical Engineering</label>
						 <input type="checkbox" name="Civil" id="civil">
						 <label for="civil">Civil Engineering</label>
						 <input type="checkbox" name="Elect" id="elect">
						 <label for="elect">Electrical Engineering</label>
						 <input type="checkbox" name="Entc" id="entc">
						 <label for="entc">Elctronics And Telecommunications</label>
						 <input type="checkbox" name="It" id="it">
						 <label for="it">Information Technology</label>
					</div>

		    <input type="submit" value="Submit">


		</form>

		<form action="" method="POST" name="singular">

			<input type="submit" value="CSE" name="single-cse">

		</form>

		<form action="" method="POST" name="singular">

			<input type="submit" value="mech" name="single-mech">

		</form>

		<form action="" method="POST" name="singular">

			<input type="submit" value="Civil" name="single-civil">

		</form>

		<form action="" method="POST" name="singular">

			<input type="submit" value="entc" name="single-entc">

		</form>

		<form action="" method="POST" name="singular">

			<input type="submit" value="elect" name="single-elect">

		</form>

		<form action="" method="POST" name="singular">

			<input type="submit" value="it" name="single-it">

		</form>

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
