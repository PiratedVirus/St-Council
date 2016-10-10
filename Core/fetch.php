<?php

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

    echo "no update via update";
        echo "update via update";
        $skill = $_POST['skills'];
           $songs = $_POST['song'];
           $year = $_POST['class'];
           $age = $_POST['age'];
           $ur = $_POST['urself'];
           $clg = $_POST['branch'];

           echo $_SESSION['stud_email'];
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

?>


   
