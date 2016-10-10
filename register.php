<?php require_once 'Core/new.php'; ?>
<!DOCTYPE html>
<html>

<head>
   <meta http-equiv="Content-Type" content="text/html"/>
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

   <title>Log In</title>

   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
   <link rel="stylesheet" href="Assets/css/base.css">
</head>

<body>

<nav id="subpages">
  <div class="nav-wrapper"><a href="#!" class="brand-logo">Student Council</a><a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="sass.html">Log In</a></li>
      <li><a href="badges.html">Events</a></li>
      <li><a href="collapsible.html"> </a></li>
      <li><a href="mobile.html">Mobile</a></li>
    </ul>
    <ul id="mobile-demo" class="side-nav">
      <li><a href="sass.html">Sass</a></li>
      <li><a href="badges.html">Components</a></li>
      <li><a href="collapsible.html">Javascript</a></li>
      <li><a href="mobile.html">Mobile</a></li>
    </ul>
  </div>
</nav>

<div class="container new-form">
 <div class="row">
    <form class="col m6 s12 offset-m3" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    
     <div class="col s12">
        
            
            <?php if ( isset($errMSG) ) { ?>

            <div class="form-group">
                <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
                    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
            </div>
                <?php } ?>


            <div class="input-field">
                <input type="text" name="enroll" id="new-enroll" length="11" maxlength="11" value="<?php echo $enroll ?>" />
                <label for="new-enroll" data-error = "<?php echo $idError; ?>">Enrollment Number</label>
                <span class="text-danger"><?php echo $enrollError; ?></span>
            </div>

            <div class="input-field">
                <input type="text" name="name" id="new-name" maxlength="50" value="<?php echo $name ?>" />
                <label for="new-name" data-error = "<?php echo $nameError; ?>">Name</label>
                <span class="text-danger"><?php echo $nameError; ?></span>
            </div>
            
            <div class="input-field">
                <input type="email" name="email" id="new-email"  value="<?php echo $email ?>" />
                <label for="new-email" data-error = "<?php echo $idError; ?>">Email</label>
                <span class="text-danger"><?php echo $emailError; ?></span>
            </div>
            
            <div class="input-field">
                <input type="password" name="pass" id="new-pass" maxlength="15" />
                <label for="new-pass" data-error = "<?php echo $idError; ?>">Password</label>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>
          

            <div class="input-field">
                <input type="text" name="skill" id="new-branch" class="branch"<?php echo $skill ?>" />
                <label for="new-branch" data-error = "<?php echo $idError; ?>">Branch (skill in db)</label>
                <span class="text-danger"><?php echo $skillError; ?></span>
            </div>
            
            <div class="input-field gender">
                <span id="male-radio">
                    <input type="radio" name="gender" value="Male" class="with-gap" id="male" />
                    <label for="male">Male</label>
                </span>
                <span>
                    <input type="radio" name="gender" value="female" class="with-gap" id="female" />
                    <label for="female">Female</label>
                </span>

            </div>



             <button type="submit" class="btn waves-effect waves-light new-submit" name="btn-signup">Sign Up</button>
        </div>
    </form>
    </div> 
</div>
<div class="center-align">
     <a href="index.php">Log in here</a>
</div>

<script src="Assets/js/jquery-1.11.3-jquery.min.js"></script>  
<script src="Assets/js/materialize.js"></script>  
<script src="Assets/js/init.js"></script>

</body>
</html>
<?php ob_end_flush(); ?>