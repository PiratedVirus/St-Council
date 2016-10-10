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



?>
	<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="tables.css">
	</head>
	<body>

		<form action="sorting.php" method="POST">
			<h3>sort by</h3>

				<!-- <input type="text" list="year" name="user_year" placeholder="year">

					<datalist id="year">
					    <option value="FE"/>
					    <option value="SE"/>
					    <option value="TE"/>
					    <option value="BE"/>
					    <option value="0"/>
					    <option value="1"/>
					    <option value="20"/>

					</datalist>


				<input type="text" list="branches" name="user_branch" placeholder="branch">

					<datalist id="branches">
					    <option value="CSE"/>
					    <option value="Mech"/>
					    <option value="Civil"/>
					</datalist>

			</h3> -->


					<div class="form-group">
						 <hr />
						 <input type="checkbox" name="FE">First Year
						 <input type="checkbox" name="SE">Second Year
						 <input type="checkbox" name="TE">Third Year
						 <input type="checkbox" name="BE">Final Year
					</div>
					<div class="form-group">
						 <hr />
						 <input type="checkbox" name="CSE">Computer Science And Engineering
						 <input type="checkbox" name="Mech">Mechanical Engineering
						 <input type="checkbox" name="Civil">Civil Engineering
						 <input type="checkbox" name="Elect">Electrical Engineering
						 <input type="checkbox" name="Entc">Elctronics And Telecommunications
						 <input type="checkbox" name="It">Information Technology
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
		 <script src="../assets/js/jquery-1.11.3-jquery.min.js"></script>
		 <script src="../assets/js/bootstrap.min.js"></script>
	</body>
	</html>
