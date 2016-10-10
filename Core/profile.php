<form action="../home.php" method="POST">

<?php 

require_once 'dbconnect.php';


// Checking check1
if (isset($_POST['check1'])) {

    echo "string1 checked		";

    $fet = mysqli_query($conn,"UPDATE users SET check1 = '1' WHERE userId ='".$_SESSION['stud_id']."'");




  } else {
  	echo "stringnot1		";
  	$fet = mysqli_query($conn,"UPDATE users SET check1 = '0' WHERE userId ='".$_SESSION['stud_id']."'");

}

// Checking check2
if (isset($_POST['check2'])) {

    echo "string2 checked		";
    $fet = mysqli_query($conn,"UPDATE users SET check2 = '1' WHERE userId ='".$_SESSION['stud_id']."'");
} else {

   echo "stringnot2		";
   $fet = mysqli_query($conn,"UPDATE users SET check2 = '0' WHERE userId ='".$_SESSION['stud_id']."'");

}


// Checking check3
if (isset($_POST['check3'])) {

    echo "string3 checked		";
    $fet = mysqli_query($conn,"UPDATE users SET check3 = '1' WHERE userId ='".$_SESSION['stud_id']."'");

} else {

   echo "stringnot3		";
   $fet = mysqli_query($conn,"UPDATE users SET check3 = '0' WHERE userId ='".$_SESSION['stud_id']."'");

}

// Checking check4
if (isset($_POST['check4'])) {

    echo "string4 checked		";
    $fet = mysqli_query($conn,"UPDATE users SET check4 = '1' WHERE userId ='".$_SESSION['stud_id']."'");
} else {

   echo "stringnot4		";
   $fet = mysqli_query($conn,"UPDATE users SET check4 = '0' WHERE userId ='".$_SESSION['stud_id']."'");

}
?>

    <input type="text" name="skills" placeholder="skills" value="<?php echo $_SESSION['stud_skills'] ?>">
    <input type="text" name="class" placeholder="year" value="<?php echo $_SESSION['stud_class'] ?>">
    <input type="text" name="song" placeholder="song" value="<?php echo $_SESSION['stud_song'] ?>">
    <input type="text" name="age" placeholder="age" value="<?php echo $_SESSION['stud_age'] ?>">
    <input type="text" name="urself" placeholder="urself" value="<?php echo $_SESSION['stud_urself'] ?>">
    <input type="text" name="branch" placeholder="branch" value="<?php echo $_SESSION['stud_branch'] ?>">

    <input type="checkbox" name="check1">Web Designer
    <input type="checkbox" name="check2">App Designer
    <input type="checkbox" name="check3">Graphics Designer
    <input type="checkbox" name="check4">Singer

    <input type="submit" value="Submit">
</form>


<a href="display.php">View Data</a>
