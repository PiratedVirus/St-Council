<?php
    require_once 'dbconnect.php';
    ob_start();
    session_start();

    if (isset($_POST['web'])) {
        $web = '1';
        $fet = mysqli_query($conn,"UPDATE users SET Web = '1' WHERE userId ='".$_SESSION['stud_id']."'");
      } else {
        // $web = '0';
        $fet = mysqli_query($conn,"UPDATE users SET Web = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }

    // Checking App
    if (isset($_POST['app'])) {
        $app = '1';
        $fet = mysqli_query($conn,"UPDATE users SET app = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $app = '0';
       $fet = mysqli_query($conn,"UPDATE users SET app = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }

    // Checking graphics
    if (isset($_POST['graphics'])) {
        $graphics = '1';
        $fet = mysqli_query($conn,"UPDATE users SET photoshop = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $graphics = '0';
       $fet = mysqli_query($conn,"UPDATE users SET photoshop = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }

    // Checking animations
    if (isset($_POST['animations'])) {
        $animations = '1';
        $fet = mysqli_query($conn,"UPDATE users SET animation = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $animations = '0';
       $fet = mysqli_query($conn,"UPDATE users SET animation = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking Networking
    if (isset($_POST['Networking'])) {
        $networking = '1';
        $fet = mysqli_query($conn,"UPDATE users SET networking = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $networking = '0';
       $fet = mysqli_query($conn,"UPDATE users SET networking = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking Autocad
    if (isset($_POST['Autocad'])) {
        $autocad = '1';
        $fet = mysqli_query($conn,"UPDATE users SET autocad = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $autocad = '0';
       $fet = mysqli_query($conn,"UPDATE users SET autocad = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking Katia
    if (isset($_POST['Katia'])) {
        $katia = '1';
        $fet = mysqli_query($conn,"UPDATE users SET katia = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $katia = '0';
       $fet = mysqli_query($conn,"UPDATE users SET katia = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking Robocon
    if (isset($_POST['Robocon'])) {
        $robocon = '1';
        $fet = mysqli_query($conn,"UPDATE users SET robocon = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $robocon = '0';
       $fet = mysqli_query($conn,"UPDATE users SET robocon = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking Other
    if (isset($_POST['oOther'])) {
        $other = '1';
        $fet = mysqli_query($conn,"UPDATE users SET other = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $other = '0';
       $fet = mysqli_query($conn,"UPDATE users SET other = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking act
    if (isset($_POST['act'])) {
        $act = '1';
        $fet = mysqli_query($conn,"UPDATE users SET acting = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $act = '0';
       $fet = mysqli_query($conn,"UPDATE users SET acting = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking dance
    if (isset($_POST['dance'])) {
        $dance = '1';
        $fet = mysqli_query($conn,"UPDATE users SET dance = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $dance = '0';
       $fet = mysqli_query($conn,"UPDATE users SET dance = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking Ankering
    if (isset($_POST['Ankering'])) {
        $anker = '1';
        $fet = mysqli_query($conn,"UPDATE users SET ankering = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $anker = '0';
       $fet = mysqli_query($conn,"UPDATE users SET ankering = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking Singing
    if (isset($_POST['Singing'])) {
        $sing = '1';
        $fet = mysqli_query($conn,"UPDATE users SET singing = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $sing = '0';
       $fet = mysqli_query($conn,"UPDATE users SET singing = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking Drama
    if (isset($_POST['Drama'])) {
        $drama = '1';
        $fet = mysqli_query($conn,"UPDATE users SET drama = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $drama = '0';
       $fet = mysqli_query($conn,"UPDATE users SET drama = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking Writing
    if (isset($_POST['Writing'])) {
        $writing = '1';
        $fet = mysqli_query($conn,"UPDATE users SET writing = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $writing = '0';
       $fet = mysqli_query($conn,"UPDATE users SET writing = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking Poetry
    if (isset($_POST['Poetry'])) {
        $poetry = '1';
        $fet = mysqli_query($conn,"UPDATE users SET poetry = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $poetry = '0';
       $fet = mysqli_query($conn,"UPDATE users SET poetry = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking Drawing
    if (isset($_POST['Drawing'])) {
        $drawing = '1';
        $fet = mysqli_query($conn,"UPDATE users SET drawing = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $drawing = '0';
       $fet = mysqli_query($conn,"UPDATE users SET drawing = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking Decoraction
    if (isset($_POST['Decoraction'])) {
        $decoraction = '1';
        $fet = mysqli_query($conn,"UPDATE users SET decoraction = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $decoraction = '0';
       $fet = mysqli_query($conn,"UPDATE users SET decoraction = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking Painting
    if (isset($_POST['Painting'])) {
        $paint = '1';
        $fet = mysqli_query($conn,"UPDATE users SET painting = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $paint = '0';
       $fet = mysqli_query($conn,"UPDATE users SET painting = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking Cricket
    if (isset($_POST['Cricket'])) {
        $cricket = '1';
        $fet = mysqli_query($conn,"UPDATE users SET cricket = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $cricket = '0';
       $fet = mysqli_query($conn,"UPDATE users SET cricket = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking Badminton
    if (isset($_POST['Badminton'])) {
        $badminton = '1';
        $fet = mysqli_query($conn,"UPDATE users SET badminton = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $badminton = '0';
       $fet = mysqli_query($conn,"UPDATE users SET badminton = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking Football
    if (isset($_POST['Football'])) {
        $football = '1';
        $fet = mysqli_query($conn,"UPDATE users SET football = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $football = '0';
       $fet = mysqli_query($conn,"UPDATE users SET football = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking Chess
    if (isset($_POST['Chess'])) {
        $chess = '1';
        $fet = mysqli_query($conn,"UPDATE users SET chess = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $chess = '0';
       $fet = mysqli_query($conn,"UPDATE users SET chess = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking Kabbadi
    if (isset($_POST['Kabbadi'])) {
        $kabbadi = '1';
        $fet = mysqli_query($conn,"UPDATE users SET kabbadi = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $kabbadi = '0';
       $fet = mysqli_query($conn,"UPDATE users SET kabbadi = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking Vollyball
    if (isset($_POST['Vollyball'])) {
        $vollyball = '1';
        $fet = mysqli_query($conn,"UPDATE users SET vollyball = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
        // $vollyball = '0';
       $fet = mysqli_query($conn,"UPDATE users SET vollyball = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking Leader
    if (isset($_POST['Leader'])) {
        $fet = mysqli_query($conn,"UPDATE users SET leader = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
       $fet = mysqli_query($conn,"UPDATE users SET leader = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


    // Checking Member
    if (isset($_POST['Member'])) {
        $fet = mysqli_query($conn,"UPDATE users SET member = '1' WHERE userId ='".$_SESSION['stud_id']."'");
    } else {
       $fet = mysqli_query($conn,"UPDATE users SET member = '0' WHERE userId ='".$_SESSION['stud_id']."'");
    }


 ?>
