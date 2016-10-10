<!DOCTYPE html(lang='en')>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Student Council</title>
  <!-- CSS-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
  <link href="Assets/css/base.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body> 

<nav id="menu">
	<div class="nav-wrapper">

		<ul id="slide-out" class="side-nav">
		    <li><div class="userView">
		      <img class="background" src="Assets/img/2.jpg">
		      <a href="#"><img class="circle" src="Assets/img/user.png"></a>
		      <a href="#"><span class="black-text name">John Doe</span></a>
		      <a href="#"><span class="black-text email">jdandturk@gmail.com</span></a>
		    </div></li>
		    <li><a href="#!"><img class="slideicon" src="Assets/img/eye.png"  alt="">View Profile</a></li>
		    <li><a href="#!"><img class="slideicon" src="Assets/img/editpro.png"  alt="">Edit Profile</a></li>
		    <li><a href="#!"><img class="slideicon" src="Assets/img/logout.png"  alt="">Log Out</a></li>
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

<div class="container">
	<div class="row">
	    <form class="col s12">

	      <div class="row">

	    	<div class="input-field col s12">
	    	  <input id="icon_prefix" type="text" value="<?php echo $_SESSION['stud_skills'] ?>" class="validate">
	    	  <label for="icon_prefix">Name</label>
	    	</div>

	        <div class="input-field col s6">
	          <input id="icon_prefix" type="text" value="<?php echo $_SESSION['stud_class'] ?>" class="validate">
	          <label for="icon_prefix">Enrollment Number</label>
	        </div>

	    

	      

	        <div class="input-field col s6">
	          <input id="icon_prefix" type="text" value="<?php echo $_SESSION['stud_song'] ?>" class="validate">
	          <label for="icon_prefix">Branch</label>
	        </div>

	        <div class="input-field col s12">
	          <input id="icon_prefix" type="email" "<?php echo $_SESSION['stud_age'] ?>" class="validate">
	          <label for="icon_prefix">Email</label>
	        </div>



	        <div class="input-field col s12 m6">
	          <input id="icon_telephone" type="tel" class="validate">
	          <label for="icon_telephone">Mobile Number</label>
	        </div>
	        <div class="input-field col m6 s12">
	          <label for="birthdate">Birth Date</label>
	          <input id="birthdate" type="date" class="datepicker">
	        </div> 

	        <div class="input-field col s12 m6">
	          <input id="icon_prefix" type="text" value="<?php echo $_SESSION['stud_branch'] ?>" class="year">
	          <label for="icon_prefix">Academic Year</label>
	        </div>


	        <div class="input-field col m6 s12">
	          <input id="icon_prefix" type="text" class="state">
	          <label for="icon_prefix">State</label>
	        </div>

	        <div class="input-field gender col s12">
	            <span id="male-radio">
	                <input type="radio" name="gender" value="Male" class="with-gap" id="male" />
	                <label for="male">Localite</label>
	            </span>
	            <span>
	                <input type="radio" name="gender" value="female" class="with-gap" id="female" />
	                <label for="female">Hostelite</label>
	            </span>

	        </div>


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

		          	    <p class="col m4 s6">
		          	      <input type="checkbox" name="app" id="App"  />
		          	      <label for="App">App Developing</label>
		          	    </p>

		          	    <p class="col m4 s6">
		          	      <input type="checkbox" name="graphics" id="graphics"  />
		          	      <label for="graphics">Photoshop / Illustrator </label>
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

	        <div class="input-field col s12">
	          <input id="icon_prefix" type="text" class="Future ">
	          <label for="icon_prefix">After GECA (PG / Job..) </label>
	        </div>

		<div class="center update-button">
					
	        <button class="btn waves-effect waves-light" type="submit" name="action" style="
		    margin-top: 50px;">UPDATE
	          <i class="material-icons right">send</i>
	        </button>
		</div>


	      </div>
	    </form>
	  </div>

</div>



<script src="Assets/js/jquery-1.11.3-jquery.min.js"></script>  
<script src="Assets/js/materialize.js"></script>  
<script src="Assets/js/init.js"></script>
</body>
</html>