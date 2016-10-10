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
		$fe = 'FE';
	  } else {
	  	$fe = '';
	}

	if (isset($_POST['SE'])) {
		$se = 'SE';
	} else {
		$se = '';
	}

	if (isset($_POST['TE'])) {
	    $te = 'TE';
	} else {
		$te = '';
	}

	if (isset($_POST['BE'])) {
		$be = 'BE';
	} else {
		$be ='';
	}

	if (isset($_POST['CSE'])) {
		$cse = 'CSE';
	} else {
		$cse ='';
	}

	if (isset($_POST['Mech'])) {
		$mech = 'MECH';
	} else {
		$mech ='';
	}

	if (isset($_POST['Civil'])) {
		$civil = 'civil';
	} else {
		$civil ='';
	}

	if (isset($_POST['single-cse'])) {
			$query_cse = "SELECT * FROM users WHERE branch = 'cse'";

			    $cse_result = $conn->query($query_cse);

			    if ($cse_result->num_rows > 0) {
			         echo "<table> <tr><th>ID</th> <th>Name</th> <th>Year</th></tr>";
			         // output data of each row
			         while($row = $cse_result->fetch_assoc()) {
			             echo "<tr> <td> ".$row["userId"]." </td> <td> ".$row["userName"]." </td> <td>  ".$row["userEmail"]." </td> <td>".$row["Skills"]."</td> <td>".$row["age"]."</td> <td>".$row["song"]."</td> <td>".$row["class"]."</td> <td>".$row["branch"]."</td> </tr>";
			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

		} 

	if (isset($_POST['single-mech'])) {
			$query_mech = "SELECT * FROM users WHERE branch = 'mech'";

			    $mech_result = $conn->query($query_mech);

			    if ($mech_result->num_rows > 0) {
			         echo "<table> <tr><th>ID</th> <th>Name</th> <th>Year</th></tr>";
			         // output data of each row
			         while($row = $mech_result->fetch_assoc()) {
			             echo "<tr> <td> ".$row["userId"]." </td> <td> ".$row["userName"]." </td> <td>  ".$row["userEmail"]." </td> <td>".$row["Skills"]."</td> <td>".$row["age"]."</td> <td>".$row["song"]."</td> <td>".$row["class"]."</td> <td>".$row["branch"]."</td> </tr>";
			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

		} 
	if (isset($_POST['single-civil'])) {
			$query_civil = "SELECT * FROM users WHERE branch = 'civil'";

			    $civil_result = $conn->query($query_civil);

			    if ($civil_result->num_rows > 0) {
			         echo "<table> <tr><th>ID</th> <th>Name</th> <th>Year</th></tr>";
			         // output data of each row
			         while($row = $civil_result->fetch_assoc()) {
			             echo "<tr> <td> ".$row["userId"]." </td> <td> ".$row["userName"]." </td> <td>  ".$row["userEmail"]." </td> <td>".$row["Skills"]."</td> <td>".$row["age"]."</td> <td>".$row["song"]."</td> <td>".$row["class"]."</td> <td>".$row["branch"]."</td> </tr>";
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
						 <input type="checkbox" name="FE">FE
						 <input type="checkbox" name="SE">SE
						 <input type="checkbox" name="TE">TE
						 <input type="checkbox" name="BE">BE
					</div>
					<div class="form-group">
						 <hr />
						 <input type="checkbox" name="CSE">CSE
						 <input type="checkbox" name="Mech">Mech
						 <input type="checkbox" name="Civil">Civil
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
		
		<?php 

				// $branch_input = $_POST['user_branch'];
				// echo $branch_input;

				// $year_input = $_POST['user_year'];
				// echo $year_input;



				$sql = "SELECT * FROM users WHERE (class = '$fe' or class = '$se' or class = '$te' or class = '$be') and ( branch = '$cse' or branch = '$mech' or branch = '$civil' ) ";
			    $result = $conn->query($sql);

			    if ($result->num_rows > 0) {
			         echo "<table> <tr><th>ID</th> <th>Name</th> <th>Year</th></tr>";
			         // output data of each row
			         while($row = $result->fetch_assoc()) {
			             echo "<tr> <td> ".$row["userId"]." </td> <td> ".$row["userName"]." </td> <td>  ".$row["userEmail"]." </td> <td>".$row["Skills"]."</td> <td>".$row["age"]."</td> <td>".$row["song"]."</td> <td>".$row["class"]."</td> <td>".$row["branch"]."</td> </tr>";
			         }
			         echo "</table>";
			    } else {
			         echo "0 results";
			    }

			    $conn->close();
			?>


		 ?>
		 <script src="../assets/js/jquery-1.11.3-jquery.min.js"></script>
		 <script src="../assets/js/bootstrap.min.js"></script>
	</body>
	</html>