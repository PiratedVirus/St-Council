<?php

 // this will avoid mysql_connect() deprecation error.
 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 // but I strongly suggest you to use PDO or MySQLi.
 
 define('DBHOST', 'localhost');
 define('DBUSER', 'root');
 define('DBPASS', '');
 define('DBNAME', 'students');
 
 global $conn;
 
 $conn = mysqli_connect(DBHOST,DBUSER,DBPASS);
 $dbcon = mysqli_select_db($conn,DBNAME);
 
 if ( !$conn ) {
  die("Connection failed : " . mysqli_error($conn));
 }
 
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysqli_error($conn));
 }

// $emial = "SELECT userId FROM users where class='secse'";

 session_start();
 $_SESSION["username"] =  "mial";

 // $chk = "Jay hind"
// $get = mysqli_query($conn,"SELECT userName FROM users WHERE userId='111'");
// $arr = mysqli_fetch_array($get);
// $numb = $arr['userName'];
//  $num = 3;
//  $_SESSION['jay'] = $numb;


 ?>