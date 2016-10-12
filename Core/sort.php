
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

<nav id="menu">
    <div class="nav-wrapper">

      <ul id="slide-out" class="side-nav">
          <li><div class="userView">
            <img class="background" src="../Assets/img/2.jpg">
            <a href="#"><img class="circle" src="../Assets/img/user.png"></a>
            <a href="#"><span  class="black-text name slide-username"> <b><?php echo $_SESSION['stud_name']; ?></b></span></a>
            <a href="#"><span class="black-text email"><?php echo $_SESSION['stud_email']; ?></span></a>
          </div></li>
          <li><a href="#!"><img class="slideicon" src="../Assets/img/eye.png"  alt="">View Profile</a></li>
          <li><a href="Core/edit.php"><img class="slideicon" src="../Assets/img/editpro.png"  alt="">Edit Profile</a></li>
          <li><a href="../logout.php?logout"><img class="slideicon" src="../Assets/img/logout.png"  alt="">Log Out</a></li>
          <li><div class="divider"></div></li>
          <li><a class="waves-effect" href="#">Events</a></li>
          <li><a class="waves-effect" href="#">Something</a></li>
      </ul>

      <a href="#" id="user-menu" data-activates="slide-out" class="button-collapse">
      <i class="material-icons">menu</i></a>

      <a href="#" class="brand-logo center">Student Council</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>


    </div>
</nav>

	

	<form action="sort.php" class = "combo" method="POST">
		<hr class="header-holder top-line">
		<div class="container">
			<h4 class="form-header">Combo Sort</h4>
			<div class="row">
				<div class="form-group combo-year col m3 s12 offset-m2">
					<p>

						<input type="checkbox" name="FE" id="fe">
						<label for="fe">First Year</label>
					</p>
					<p>

						<input type="checkbox" name="SE" id="se">
						<label for="se">Second Year</label>
					</p>
					<p>

						<input type="checkbox" name="TE" id="te">
						<label for="te">Third Year</label>
					</p>
					<p>

						<input type="checkbox" name="BE" id="be">
						<label for="be">Final Year</label>
					</p>
				</div>
				<div class="form-group combo-branch col m6 s12">
					<p>

						<input type="checkbox" name="CSE" id="cse">
						<label for="cse">Computer Science And Engineering</label>
					</p>
					<p>

						<input type="checkbox" name="Mech" id="mech">
						<label for="mech">Mechanical Engineering</label>
					</p>
					<p>

						<input type="checkbox" name="Civil" id="civil">
						<label for="civil">Civil Engineering</label>
					</p>
					<p>

						<input type="checkbox" name="Elect" id="elect">
						<label for="elect">Electrical Engineering</label>
					</p>
					<p>

						<input type="checkbox" name="Entc" id="entc">
						<label for="entc">Elctronics And Telecommunications</label>
					</p>
					<p>

						<input type="checkbox" name="It" id="it">
						<label for="it">Information Technology</label>
					</p>
				</div>
					
					<input type="submit" class="combo-sort center" value="Hunt">
					
			</div>
		</div>
				<hr class="header-holder">




	</form>

		<div class="container edit" style="margin-bottom: 50px;"">
			<h5 class="form-header">Branches</h5>
			<div class="row inline-form">

				<form action="" method="POST" name="singular">


					<input type="submit" class="imgbtn col m2 s4" value="Cse" name="single-cse">

				</form>

				<form action="" method="POST" name="singular">

					<input type="submit" class="imgbtn col m2 s4" value="Mech" name="single-mech">
						
				</form>

				<form action="" method="POST" name="singular">

					<input type="submit" class="imgbtn col m2 s4" value="Civil" name="single-civil">

				</form>

				<form action="" method="POST" name="singular">

					<input type="submit" class="imgbtn col m2 s4" value="EnTC" name="single-entc">

				</form>

				<form action="" method="POST" name="singular">

					<input type="submit" class="imgbtn col m2 s4" value="Elect" name="single-elect">

				</form>

				<form action="" method="POST" name="singular">

					<input type="submit" class="imgbtn col m2 s4" value="IT" name="single-it">

				</form>
			</div>
		</div>
			<hr class="header-holder">

		<div class="container edit" style="margin-bottom: 50px;color: #9e9e9e;" "="">
			<h5 class="form-header">Year &nbsp;&nbsp;  </h5>

			<div class="row inline-form">
				<form action="" method="POST" name="singular">

					<input type="submit" value="FE" class="imgbtn  col m2 s4 offset-m1" name="single-fe">

				</form>

				<form action="" method="POST" name="singular">

					<input type="submit" value="SE" class="imgbtn  col m2 s4 offset-m1" name="single-se">

				</form>

				<form action="" method="POST" name="singular">

					<input type="submit" value="TE" class="imgbtn  col m2 s4 offset-m1" name="single-te">

				</form>

				<form action="" method="POST" name="singular">

					<input type="submit" value="BE" class="imgbtn  col m2 s4 offset-m1" name="single-be">

				</form>
				
			</div>

		</div>
		<hr class="header-holder">

		<div class="container">
			<h5 class="form-header">Skills</h5>

			<div class="row">
				<form method="post" name="multiple-check">


							        <div class="row ">

								          <div class="col s12">
									            <ul class="tabs tab-holder" style="width: 100%;margin: 60px 0px 20px 0px;">
									              <li class="tab col s3"><a href="#technical">Technical</a></li>
									              <li class="tab col s3"><a href="#Social">Social</a></li>
									              <li class="tab col s3"><a href="#Sports">Sports</a></li>
									              <li class="tab col s3"><a href="#Managment">Management</a></li>
									            </ul>
								          </div>

								          <div id="technical" class="col s12">
								          		<p class="col m4 s6">
								          	      <input type="checkbox" name="web" id="web" />
								          	      <label for="web">Web Designing and Developing</label>
								          	    </p>

								          	  <!--   <p class="col m4 s6">
								          	      <input type="checkbox" name="app" id="App"  />
								          	      <label for="app">App Developing</label>
								          	    </p> -->

								          	    <p class="col m4 s6">
								          	      <input type="checkbox" name="graphics" id="graphics"  />
								          	      <label for="graphics">Photoshop / Illustrator </label>
								          	    </p>

								          	    <p class="col m4 s6">
								          	      <input type="checkbox" name="app" id="app"  />
								          	      <label for="app">App Developing </label>
								          	    </p>

								          	    <p class="col m4 s6">
								          	      <input type="checkbox" name="animations" id="animations"  />
								          	      <label for="animations">Animations</label>
								          	    </p>
								          	    <p class="col m4 s6">
								          	      <input type="checkbox" name="Networking" id="Networking"  />
								          	      <label for="Networking">Networking</label>
								          	    </p>

								          	    <p class="col m4 s6">
								          	      <input type="checkbox" name="Autocad" id="Autocad"  />
								          	      <label for="Autocad">Autocad</label>
								          	    </p>

								          	    <p class="col m4 s6">
								          	      <input type="checkbox" name="Katia" id="Katia"  />
								          	      <label for="Katia">Katia</label>
								          	    </p>

								          	    <p class="col m4 s6">
								          	      <input type="checkbox" name="Robocon" id="Robocon"  />
								          	      <label for="Robocon">Robocon</label>
								          	    </p>

								          	    <p class="col m4 s6">
								          	      <input type="checkbox" name="Other..." id="Other..."  />
								          	      <label for="Other...">Other...</label>
								          	    </p>
								          </div>

								          <div id="Social" class="col s12">
												<p class="col m4 s6">
											      <input type="checkbox" name="act" id="act" />
											      <label for="act">Acting</label>
											    </p>

											    <p class="col m4 s6">
											      <input type="checkbox" name="dance" id="dance"  />
											      <label for="dance">Dance</label>
											    </p>

											    <p class="col m4 s6">
											      <input type="checkbox" name="Ankering" id="Ankering"  />
											      <label for="Ankering">Ankering / Hosting</label>
											    </p>

											    <p class="col m4 s6">
											      <input type="checkbox" name="Singing" id="Singing"  />
											      <label for="Singing">Singing</label>
											    </p>

											    <p class="col m4 s6">
											      <input type="checkbox" name="Drama" id="Drama"  />
											      <label for="Drama">Drama</label>
											    </p>

											    <p class="col m4 s6">
											      <input type="checkbox" name="Writing" id="Writing"  />
											      <label for="Writing">Writing</label>
											    </p>

											    <p class="col m4 s6">
											      <input type="checkbox" name="Poetry" id="Poetry"  />
											      <label for="Poetry">Poetry</label>
											    </p>
											    <p class="col m4 s6">
											      <input type="checkbox" name="Drawing" id="Drawing"  />
											      <label for="Drawing">Drawing</label>
											    </p>
											    <p class="col m4 s6">
											      <input type="checkbox" name="Decoraction / Design" id="Decoraction / Design"  />
											      <label for="Decoraction / Design">Decoraction / Design</label>
											    </p>
											    <p class="col m4 s6">
											      <input type="checkbox" name="Painting" id="Painting"  />
											      <label for="Painting">Painting</label>
											    </p>
								           </div>

								          <div id="Sports" class="col s12">
									          	<p class="col m4 s6">
									          	  <input type="checkbox" name="Cricket" id="Cricket"  />
									          	  <label for="Cricket">Cricket</label>
									          	</p>
									          	<p class="col m4 s6">
									          	  <input type="checkbox" name="Badminton" id="Badminton"  />
									          	  <label for="Badminton">Badminton</label>
									          	</p>
									          	<p class="col m4 s6">
									          	  <input type="checkbox" name="Football" id="Football"  />
									          	  <label for="Football">Football</label>
									          	</p>
									          	<p class="col m4 s6">
									          	  <input type="checkbox" name="Chess" id="Chess"  />
									          	  <label for="Chess">Chess</label>
									          	</p>
									          	<p class="col m4 s6">
									          	  <input type="checkbox" name="Kabbadi" id="Kabbadi"  />
									          	  <label for="Kabbadi">Kabbadi</label>
									          	</p>
									          	<p class="col m4 s6">
									          	  <input type="checkbox" name="Vollyball" id="Vollyball"  />
									          	  <label for="Vollyball">Vollyball</label>
									          	</p>
								         </div>

								          <div id="Managment" class="col s12">
									          	<p class="col m4 s6">
									          	  <input type="checkbox" name="Leader" id="Leader"  />
									          	  <label for="Leader">Leader</label>
									          	</p>
									          	<p class="col m4 s6">
									          	  <input type="checkbox" name="Member" id="Member"  />
									          	  <label for="Member">Member</label>
									          	</p>
								          </div>

							        </div>
								<input type="submit" name="check" class="combo-sort" value="Hunt">

				</form>

			</div>
			<hr class="header-holder">

		</div>
			

		
		 <script src="../Assets/js/jquery-1.11.3-jquery.min.js"></script>
	     <script src="../Assets/js/materialize.js"></script>
	     <script src="../Assets/js/init.js"></script>

	     <?php 
	     	include 'sorters.php';
	      ?>
	</body>
	</html>