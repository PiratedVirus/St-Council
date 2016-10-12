<?php
	error_reporting(0);
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
			         echo "<table><thead> <tr><th>ID</th> <th>Name</th> <th>Year</th></tr></thead>";
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
			    	echo "<table><thead> <tr><th>ID</th> <th>Name</th> <th>Year</th></tr></thead>";
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
			 // echo "0 results";
		}

	$checkboxes = "SELECT * FROM users WHERE app = '$app' OR web = '$web' OR photoshop ='$graphics' OR animation = '$animations' OR networking = '$networking' OR autocad = '$autocad' OR katia = '$katia' OR robocon ='$robocon' OR other = '$other' OR acting = '$act' OR dance = '$dance' OR ankering = '$anker' OR singing = '$sing' OR drama ='$drama' OR writing = '$writing' OR poetry = '$poetry' OR drawing = '$drawing' OR decoration ='$decoraction' OR painting ='$paint' OR cricket ='$cricket' OR badminton='$badminton' OR football ='$football' OR chess ='$chess' or kabbadi ='$kabbadi' OR vollyball ='$vollyball'";
	$result = $conn->query($checkboxes);

	if ($result->num_rows > 0) {
		echo "<table><thead> <tr><th>ID</th> <th>Name</th> <th>Year</th></tr></thead>";
		 // output data of each row
		 while($row = $result->fetch_assoc()) {
			 echo "<tr> <td> ".$row["userId"]." </td> <td> ".$row["userName"]." </td> <td>  ".$row["userEmail"]." </td> <td>".$row["Skills"]."</td> <td>".$row["academic_year"]."</td> <td>".$row["mobile"]."</td> <td>".$row["web"]."</td>  </tr>";
		 }
		 echo "</table>";
	} else {
		 // echo "string in sql";
		 // echo "0 results";
	}

	$conn->close();


?>
