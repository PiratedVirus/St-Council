<!DOCTYPE html>
<html>
    <body>

    <?php
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

        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
             echo "<table><tr><th>ID</th><th>Name</th></tr>";
             // output data of each row
             while($row = $result->fetch_assoc()) {
                 echo "<tr> <td> ".$row["userId"]." </td> <td> ".$row["userName"]." </td> <td>  ".$row["userEmail"]." </td> <td>".$row["Skills"]."</td> <td>".$row["age"]."</td> <td>".$row["song"]."</td> </tr>";
             }
             echo "</table>";
        } else {
             echo "0 results";
        }

        $conn->close();
    ?>


    </body>
</html>
