<?php
session_start();

$ini = parse_ini_file('assets/php/app.ini');

$db_name = $ini['db_name'];
$db_user = $ini['db_user'];
$db_pass = $ini['db_pass'];

$conn = mysqli_connect("localhost", $db_user, $db_pass, $db_name);

//declare variables
$dob = "";
$f_name = "";
$l_name = "";
$social = 0;
$language = 0;
$gender = "";
$county = "";
$need1 = "";
$need2 = "";
$need3 = "";
$availability = "";
$time_invest = "";
$transport = "";

//check if var are posted
if(isset($_POST['dob'])) {
    $dob = $_POST['dob'];
}

if(isset($_POST['f_name'])) {
    $f_name = $_POST['f_name'];
}

if(isset($_POST['l_name'])) {
    $l_name = $_POST['l_name'];
}

if(isset($_POST['social'])) {
    $social = $_POST['social'];
}

if(isset($_POST['county'])) {
    $social = $_POST['county'];
}

if(isset($_POST['gender'])) {
    $social = $_POST['gender'];
}

if(isset($_POST['need1'])) {
    $social = $_POST['need1'];
}

if(isset($_POST['need2'])) {
    $social = $_POST['need2'];
}

if(isset($_POST['need3'])) {
    $social = $_POST['need3'];
}

if(isset($_POST['availability'])) {
    $social = $_POST['availability'];
}

if(isset($_POST['time_invest'])) {
    $social = $_POST['time_invest'];
}

if(isset($_POST['transport'])) {
    $social = $_POST['transport'];
}

$stmt = $conn->prepare('INSERT INTO client (dob, f_name, l_name, social, county, gender, need1, need2, need3, availability, time_invest, transport) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
$stmt->bind_param('issssisssssss');
$stmt->execute();
$resumeQuery = "select * from clients where dbo='".$dbo."', f_name='".$f_name."', l_name='".$l_name."', social='".$social."';";
// $sqlStatement = $conn->prepare($resumeQuery);
// $sqlStatement->execute();
// $row = $sqlStatement->fetch(PDO::FETCH_ASSOC);
//
if(!$conn) {
    echo "THERE WAS AN ERROR CONNECTING";
}
$mysqli->close();
?>
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>SER</title>

	<!-- CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
	<link href="assets/css/animate.css" rel="stylesheet">

	<!-- Custom styles CSS -->
	<link href="assets/css/style.css" rel="stylesheet" media="screen">

	<!-- Load materializecss -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="src/css/main.css" rel="stylesheet">

    <!-- Load fav and touch icons -->
    <link rel="shortcut icon" href="assets/favicon.png">

	<!-- google text fonts -->
       <link href="https://fonts.googleapis.com/css?family=Montserrat:200" rel="stylesheet">
			<script src="assets/js/modernizr.custom.js"></script>

</head>
<body>

	<!-- Home start -->
	<section  id="home" class="pfblock-image screen-height">
		<div id="particles-js">
			<div class="intro">
				<h1>SER</h1>

			<a href="#apply">
				<div class="scroll-down">
					<span>
							<i class="fa fa-angle-down fa-2x"></i>
					</span>
				</div>
			</a>
		</div>
	</section>
	<!-- Home end -->

	<!-- Navigation start -->
	<header class="header">
		<nav class="navbar navbar-custom" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">SER</a>
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
						<!-- <li><a href="#home">Home</a></li> -->
						<li><a href="#apply0">Apply</a></li>
	          <!-- <li><a href="#skills">Progress</a></li> -->
						<li><a href="#articles">Success Stories</a></li>
						<!-- <li><a href="#contact">Contact</a></li> -->
					</ul>
				</div>
			</div><!-- .container -->
		</nav>
	</header>
	<!-- Navigation end -->



  <!-- q1 LANGUAGE-->
	<section id="apply0" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
          <span class="icon major style1 fa-comments"></span>
				</div>

				<!-- area -->
          <div class="col s12 m12 l6">
						<form action="#">
							<label ><div class="question1">Hi, what language are you most comfortable with?</label></div>
					     <p>
					       <label>
					         <input id="myInput" name="group1" type="radio" onclick="location.href='#apply2';"/>
					         <span class="choice">English</span>
					       </label>
					     </p>
					     <p>
					       <label>
					         <input id="myInput1" name="group1" type="radio" onclick="location.href='#apply2';"/>
					         <span class="choice" >Español</span>
					       </label>
					     </p>
					   </form>
          </div>

					<!--Progress Bar -->
					<div class="progress" style="height: 20px;">
					  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 2%" aria-valuenow="2" aria-valuemin="100" aria-valuemax="100"></div>
					</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- q1 end -->


	<!-- q2 FIRST NAME-->
	<section id="apply2" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
				<span class="icon major style1 fa-user"></span>
							</div>

				<!-- area -->
          <div class="col s12 m12 l6">

						<input  type="text" class="validate" checked autofocus="autofocus"
						onKeyDown="if(event.keyCode==13) location.href='#apply3';"
						<label ><div class="question">What is your first name?</div><div class="question"></label>
          </div>

				<!--Progress Bar -->
					<div class="progress" style="height: 20px;">
						<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 4%" aria-valuenow="4" aria-valuemin="100" aria-valuemax="100">4%</div>
					</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- q2 end -->

	<!-- q3 LAST NAME-->
	<section id="apply3" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
              <span class="icon major style1 fa-user"></span>
				</div>


				<!-- area -->
				<div class="col s12 m12 l6">

					<input  type="text" class="validate"
					checked autofocus="autofocus"
					onKeyDown="if(event.keyCode==13) location.href='#apply4';"
					<label ><div class="question">What is your last name?</label></div>
				</div>

				<!--Progress Bar -->
				<div class="progress" style="height: 20px;">
					<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 6%" aria-valuenow="6" aria-valuemin="100" aria-valuemax="100">6%</div>
				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- q3 end -->

	<!-- q4 BIRTHDAY-->
	<section id="apply4" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
							<span class="icon major style1 fa-calendar"></span>
						</div>

						<!-- area -->
						<div class="col s12 m12 l6">

							<input  type="text" class="validate"
							checked autofocus="autofocus"
							onKeyDown="if(event.keyCode==13) location.href='#apply5';"
							<label ><div class="question">What is your birthday?</label></div>
						</div>

						<!--Progress Bar -->
							<div class="progress" style="height: 20px;">
								<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="100" aria-valuemax="100">8%</div>
							</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- q4 end -->

	<!-- q5 GENDER-->
	<section id="apply5" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
							<span class="icon major style1 fa-calendar"></span>
							</div>

				<!-- area -->
				<div class="input-field col s12 l6 m12">
					<form action="#">
						<label ><div class="question">What's your gender?</label></div>
						 <p>
							 <label>
								 <input id="myInput2" name="group1" type="radio" onclick="location.href='#apply6';" />
								 <span class="choice" >Male</span>
							 </label>
						 </p>
						 <p>
							 <label>
								 <input id="myInput3" name="group1" type="radio" onclick="location.href='#apply6';"/>
								 <span class="choice" >Female</span>
							 </label>
						 </p>
						 <p>
							 <label>
								 <input id="myInput4" name="group1" type="radio" onclick="location.href='#apply6';"/>
								 <span class="choice" >Other</span>
							 </label>
						 </p>
					 </form>
  		 </div>

			 <!--Progress Bar -->
				 <div class="progress" style="height: 20px;">
					 <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="100" aria-valuemax="100">10%</div>
				 </div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- q5 end -->

	<!-- q6 SSN-->
	<section id="apply6" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
							<span class="icon major style1 fa-calendar"></span>
						</div>

				<!-- area -->
				<div class="col s12 m12 l6">

					<input  type="text" class="validate"
					checked autofocus="autofocus"
					onKeyDown="if(event.keyCode==13) location.href='#apply7';"
					<label >last 4 digits of your social security number?</label>
				</div>

				<!--Progress Bar -->
 				 <div class="progress" style="height: 20px;">
 					 <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="100" aria-valuemax="100">12%</div>
 				 </div>



			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- q6 end -->

	<!-- q7 County-->
	<section id="apply7" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
							<span class="icon major style1 fa-map-marker"></span>
						</div>

				<!-- area -->
					<form action="#">
						<label ><div class="question">What county do you currently live in?</label></div>
						 <p>
							 <label>
								 <input id="myInput" class="with-gap" name="group1" type="radio" onclick="location.href='#apply8';" />
								 <span class="choice">Houston</span>
							 </label>
						 </p>
						 <p>
							 <label>
								 <input id="myInput" class="with-gap" name="group1" type="radio" onclick="location.href='#apply8';"/>
								 <span class="choice" >Fort Bend</span>
							 </label>
						 </p>
						 <p>
							 <label>
								 <input id="myInput" class="with-gap" name="group1" type="radio" onclick="location.href='#apply8';"/>
								 <span class="choice" >Galveston</span>
							 </label>
						 </p>
						 <p>
							 <label>
								 <input id="myInput" name="group1" type="radio" onclick="location.href='#apply8';" />
								 <span class="choice" >Harris</span>
							 </label>
						 </p>
						 <p>
							 <label>
								 <input id="myInput"name="group1" type="radio" onclick="location.href='#apply8';"/>
								 <span class="choice">Montgomery</span>
							 </label>
						 </p>
						 <p>
							 <label>
								 <input id="myInput"name="group1" type="radio" onclick="location.href='#apply8';"/>
								 <span class="choice" >Other</span>
							 </label>
						 </p>
					 </form>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- q7 end -->

	<!-- q8 Top 3 Needs-->
	<section id="apply8" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
							<span class="icon major style1 fa-map-marker"></span>
						</div>

				<!-- area -->
					<form action="#">
						<label ><div class="question">Please select your top area of need?</label></div>
						 <p>
							 <label>
								 <input id="myInput" name="group2" type="radio" onclick="location.href='#apply9';" />
								 <span class="choice">Job Placement</span>
							 </label>
						 </p>
						 <p>
							 <label>
								 <input id="myInput"name="group2" type="radio" onclick="location.href='#apply9';"/>
								 <span class="choice">Career Development</span>
							 </label>
						 </p>
						 <p>
							 <label>
								 <input id="myInput"name="group2" type="radio" onclick="location.href='#apply9';"/>
								 <span class="choice" >Training</span>
							 </label>
						 </p>
						 <p>
							 <label>
								 <input id="myInput" name="group2" type="radio" onclick="location.href='#apply9';" />
								 <span class="choice">Education</span>
							 </label>
						 </p>
						 <p>
							 <label>
								 <input id="myInput"name="group2" type="radio" onclick="location.href='#apply9';"/>
								 <span class="choice">Income Support</span>
							 </label>
						 </p>
						 <p>
							 <label>
								 <input id="myInput"name="group2" type="radio" onclick="location.href='#apply9';"/>
								 <span class="choice">Financial Education</span>
							 </label>
						 </p>
					 </form>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- q8 end -->

	<!-- q9 Availability-->
	<section id="apply9" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
							<span class="icon major style1 fa-calendar"></span>
						</div>

				<!-- area -->
				<div class="col s12 m12 l6">

					<input  type="text" class="validate"
					checked autofocus="autofocus"
					onKeyDown="if(event.keyCode==13) location.href='#apply10';"
					<label >How many hours a week will you work?</label>
				</div>

					<!--Progress Bar -->
	 				 <div class="progress" style="height: 20px;">
	 					 <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 18%" aria-valuenow="18" aria-valuemin="100" aria-valuemax="100">18%</div>
	 				 </div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- q9 end -->

	<!-- q10 Commitment slider-->
	<section id="apply10" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
							<span class="icon major style1 fa-clock-o"></span>
						</div>

				<!-- area -->
				<form action="#">
					<label ><div class="question">How long will you invest in the program?</label></div>
					 <p>
						 <label>
							 <input id="myInput" name="group1" type="radio" onclick="location.href='#stories';" />
							 <span  class="choice">1 -3 Months</span>
						 </label>
					 </p>
					 <p>
						 <label>
							 <input id="myInput"name="group1" type="radio" onclick="location.href='#stories';"/>
							 <span class="choice">3 -6 Months</span>
						 </label>
					 </p>
					 <p>
						 <label>
							 <input id="myInput" name="group1" type="radio" onclick="location.href='#stories';" />
							 <span class="choice">6 -9 Months</span>
						 </label>
					 </p>
					 <p>
						 <label>
							 <input id="myInput" name="group1" type="radio" onclick="location.href='#stories';"/>
							 <span class="choice">9 -12 Months</span>
						 </label>
					 </p>
				 </form>

					<!--Progress Bar -->
	 				 <div class="progress" style="height: 20px;">
	 					 <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="100" aria-valuemax="100">20%</div>
	 				 </div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
	<!-- q10 end -->

	<!-- q11 Transportation Method-->
	<section id="apply" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
							<span class="icon major style1 fa-calendar"></span>
						</div>

				<!-- area -->
					<div class="input-field col s12">
						<select>
								<option value="" disabled selected>Own/lease vehicle</option>
								<option value="1">Borrow vehicle</option>
								<option value="2">Public transit</option>
								<option value="3">Own/lease vehicle but it's not operable/not reliable</option>
						</select>
						<label>How do you get from place to place? (Select one)>
					</div>

					<!--Progress Bar -->
	 				 <div class="progress" style="height: 20px;">
	 					 <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="100" aria-valuemax="100">22%</div>
	 				 </div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
		<!-- q11 end -->

		<!-- q12 ID follow-up question, only displays if "yes" to above-->
		<section id="apply" class="pfblock pfblock-gray formAll" >
			<div class="container">
				<div class="row">

					<div class="col s12 m12 l6">
								<span class="icon major style1 fa-calendar"></span>
							</div>

					<!-- area -->
						<div class="input-field col s12 l6 m12">
								<form action="#">
									<label for="sport"><div class="question">Do you have a valid ID? Don’t worry - If not, we can help with that!</label></div>
									 <p>
										 <label>
											 <input id="myInput" name="group1" type="radio" onclick="location.href='#apply6';" />
											 <span><div class="choice">Yes</span></div>
										 </label>
									 </p>
									 <p>
										 <label>
											 <input id="myInput"name="group1" type="radio" onclick="location.href='#apply6';"/>
											 <span><div class="choice">No</span></div>
										 </label>
									 </p>
								 </form>
						 </div>

				 <!--Progress Bar -->
	 	 			 <div class="progress" style="height: 20px;">
	 	 				 <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 24%" aria-valuenow="24" aria-valuemin="100" aria-valuemax="100">24%</div>
	 	 			 </div>

				</div><!-- .row -->
			</div><!-- .container -->
		</section>
			<!-- q12 end -->

			<!-- q13 ID follow-up question, only displays if "yes" to above-->
			<section id="apply" class="pfblock pfblock-gray formAll" >
				<div class="container">
					<div class="row">

						<div class="col s12 m12 l6">
									<span class="icon major style1 fa-calendar"></span>
								</div>

						<!-- area -->
							<div class="input-field col s12">
								<select>
										<option value="" disabled selected>Texas-issued Driver's License</option>
										<option value="1">Other State's Driver's License</option>
										<option value="2">Texas Issued ID Card</option>
										<option value="3">Other State's ID Card</option>
										<option value="4">Passport</option>
								</select>
								<label>Select one of the following>
							</div>

						<!--Progress Bar -->
							<div class="progress" style="height: 20px;">
								<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 26%" aria-valuenow="26" aria-valuemin="100" aria-valuemax="100">26%</div>
							</div>

					</div><!-- .row -->
				</div><!-- .container -->
			</section>
				<!-- q13 end -->

				<!-- q14 ID follow-up question, only displays if 0 or 1 to above-->
				<section id="apply" class="pfblock pfblock-gray formAll" >
					<div class="container">
						<div class="row">

							<div class="col s12 m12 l6">
										<span class="icon major style1 fa-calendar"></span>
									</div>

							<!-- area -->
							<div class="input-field col s12 l6 m12">
									<form action="#">
										<label for="sport"><div class="question">What type of driver's license do you have?</label></div>
										 <p>
											 <label>
												 <input id="myInput" name="group1" type="radio" onclick="location.href='#apply6';" />
												 <span><div class="choice">A</span></div>
											 </label>
										 </p>
										 <p>
											 <label>
												 <input id="myInput"name="group1" type="radio" onclick="location.href='#apply6';"/>
												 <span><div class="choice">B</span></div>
											 </label>
										 </p>
										 <p>
											 <label>
												 <input id="myInput"name="group1" type="radio" onclick="location.href='#apply6';"/>
												 <span><div class="choice">C</span></div>
											 </label>
										 </p>
										 <p>
											 <label>
												 <input id="myInput"name="group1" type="radio" onclick="location.href='#apply6';"/>
												 <span><div class="choice">M</span></div>
											 </label>
										 </p>
									 </form>
							 </div>

							 <!--Progress Bar -->
	 							<div class="progress" style="height: 20px;">
	 								<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="100" aria-valuemax="100">28%</div>
	 							</div>


						</div><!-- .row -->
					</div><!-- .container -->
				</section>
					<!-- q14 end -->

<!-- Some sort of Checkpoint would be good here!>

<!-- q15 Living Arrangement-->
<section id="apply" class="pfblock pfblock-gray formAll" >
	<div class="container">
		<div class="row">

			<div class="col s12 m12 l6">
						<span class="icon major style1 fa-calendar"></span>
					</div>

			<!-- area -->
				<div class="input-field col s12">
					<label>What is your current living arrangement?>
					<select>
							<option value="" disabled selected>Homeowner</option>
							<option value="1">Renter - Unsubsized (not receiving public assistance)</option>
							<option value="2">Renter - Subsidized (receiving public assistance to cover your rent)</option>
							<option value="3">Living with a friend/dfamily</option>
							<option value="4">Staying in a shelter</option>
							<option value="5">Homeless</option>
					</select>

				</div>

				<!--Progress Bar -->
				 <div class="progress" style="height: 20px;">
					 <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="100" aria-valuemax="100">30%</div>
				 </div>

		</div><!-- .row -->
	</div><!-- .container -->
</section>
	<!-- q15 end -->

	<!-- q16 Hispanic/Latino Question -->
	<section id="apply" class="pfblock pfblock-gray formAll" >
		<div class="container">
			<div class="row">

				<div class="col s12 m12 l6">
							<span class="icon major style1 fa-calendar"></span>
						</div>

				<!-- area -->
				<div class="input-field col s12 l6 m12">
						<form action="#">
							<label for="sport"><div class="question">Do you consider yourself Hispanic or Latino?</label></div>
							 <p>
								 <label>
									 <input id="myInput" name="group1" type="radio" onclick="location.href='#apply6';" />
									 <span><div class="choice">Yes</span></div>
								 </label>
							 </p>
							 <p>
								 <label>
									 <input id="myInput"name="group1" type="radio" onclick="location.href='#apply6';"/>
									 <span><div class="choice">No</span></div>
								 </label>
							 </p>


						 </form>
				 </div>

				 <!--Progress Bar -->
 				 <div class="progress" style="height: 20px;">
 					 <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 32%" aria-valuenow="32" aria-valuemin="100" aria-valuemax="100">32</div>
 				 </div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>
		<!-- q16 end -->




	<!-- articles start -->
	<section id="stories" class="pfblock pfblock-gray">

		<div class="container">
        <div class="row">

				<div class="col-sm-6 col-sm-offset-3">
					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Success Stories</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							No one lights a lamp in order to hide it behind the door: the purpose of light is to create more light, to open people’s eyes, to reveal the marvels around.
						</div>
					</div>
				</div>


			</div>

			<div>
				<table style="width:100%">
				  <tr>
				    <th>Firstname</th>
				    <th>Lastname</th>
				    <th>Age</th>
				  </tr>
				  <tr>
				    <td>Jill</td>
				    <td>Smith</td>
				    <td>50</td>
				  </tr>
				  <tr>
				    <td>Eve</td>
				    <td>Jackson</td>
				    <td>94</td>
				  </tr>
				</table>
			</div>


			<div class="row">


			<div id="cbp-qtrotator" class="cbp-qtrotator">
                <div class="cbp-qtcontent">
                    <img src="assets/img/content.jpg" alt="client-1" width="350" />
                    <blockquote>
                      <p>"Cultures, religious sects, and any word used to differentiate and divide society is seriously endangered."
												<a href="https://medium.com/@yasinehsan11/bits-and-bytes-fight-or-flight-3786842b56da" class="myPapers"><b>Read More</b></a>
											</p>
                      <footer>Bits and Bytes: Fight or Flight</footer>
                    </blockquote>
                </div>
								<div class="cbp-qtcontent">
                    <img src="assets/img/glasses.jpg" alt="client-1" width="350"/>
                    <blockquote>
                      <p>"I was looking for CEOs, professionals, teachers, students and anyone with a story."
												<a href="https://medium.com/@yasinehsan11/my-story-my-mantra-8e2ba2fe0861" class="myPapers"><b>Read More</b></a>
											</p>
                      <footer>My Story, My Mantra</footer>
                    </blockquote>
                </div>
            </div>
            </div><!-- .row -->
		</div><!-- .row -->
	</section>
	<!-- article end -->




	<!-- Footer start -->
	<footer id="footer">
		<div class="container">
			<div class="row">

				<div class="col-sm-12">

					<ul class="social-links">
						<li><a href="https://github.com/YasinEhsan" class="wow fadeInUp" data-wow-delay=".1s"><i class="fa fa-github" class="myCode"></i></a></li>
						<li><a aria-hidden="true" href="mailto:yasinehsan11@gmail.com?Subject=Visited%20Website%20--"
							 class="wow fadeInUp" data-wow-delay=".6s"><i class="fa fa-envelope"></i></a></li>
					</ul>

					<!-- <p class="heart">
                        Made with <span class="fa fa-heart fa-2x animated pulse"></span> in Nottingham
                    </p> -->
                    <p class="copyright"> © 2018 SER | <a style="text-decoration: none;" href="http://serhouston.org/" class="myV1">Previous Version</a></p>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</footer>

	<!-- Footer end -->

	<!-- Scroll to top -->

	<div class="scroll-up">
		<a href="#home"><i class="fa fa-angle-up"></i></a>
	</div>

    <!-- Scroll to top end-->

	<!-- Javascript files -->
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.parallax-1.1.3.js"></script>
	<script src="assets/js/imagesloaded.pkgd.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
	<script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/wow.min.js"></script>
  <script src="assets/js/jquery.easypiechart.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/jquery.cbpQTRotator.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="assets/js/main.js"></script>

	<!-- materialize  -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<!-- particles css -->
	<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
	<script>
	particlesJS.load('particles-js', 'assets/json/particles.json', function() {
	console.log('callback - particles.js config loaded');});
	</script>


</body>
</html>
