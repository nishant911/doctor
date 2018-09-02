<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->

<!-- Mirrored from exprostudio.com/html/medlink/signin-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 11:33:16 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Medlink Directory A Complete Learning Source : Signin / Singup</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.countdown.css">
	<link rel="stylesheet" href="css/customScrollbar.css">
	<link rel="stylesheet" href="css/bootstrap-timepicker.min.css">
	<link rel="stylesheet" href="css/fullcalendar.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/transitions.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("repassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }

   

</script>
<script type="text/javascript">
	 function logincheck() {
    	alert("Hello");
    	var username = document.getElementById("user_name").value;
        var password_login = document.getElementById("password_login").value;
        if (username or password_login = null) {
            alert("Empty Username or Password");
            return false;
        }
        return true;
    }
</script>
</head>
<?php include('header.php'); ?>
<body class="tg-login">

	<?php
		if( !empty( $_REQUEST['Message'] ) )
		{
			$msg = $_REQUEST['Message'];
    //echo sprintf( '<p>%s</p>', $_REQUEST['Message'] );
    echo '<script> alert("Invalid UserName or Password"); </script>';
		}
	?>
	
	

	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
				<div class="tg-pageinnerbanner tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/banner/img-02.jpg">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<div class="tg-pageheadcontent">
							<div class="tg-pagetitle">
								<h1>Login / Register</h1>
							</div>
							<ol class="tg-breadcrumb">
								<li><a href="#">Home</a></li>
								<li class="tg-active">Become A Member</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					<div id="tg-twocolumns" class="tg-twocolumns">
						
						<div class="col-md-8 col-sm-7 col-xs-12">
							<div id="tg-content" class="tg-content">
								<div class="tg-signinsignup">
									<div class="tg-title">
										<h2>Register Now As</h2>
									</div>
									<div class="tg-dashboardtabs">
										<ul class="tg-dashboardtabnav" role="tablist">
											<li role="presentation" class="active">
												<a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Service Seeker</a>
											</li>
											<li role="presentation">
												<a href="#services" aria-controls="services" role="tab" data-toggle="tab">Service Provider</a>
											</li>
										</ul>
										<div class="tab-content tg-dashboardtabcontent">
											<div role="tabpanel" class="tab-pane active" id="overview">
												<div class="tg-searchbulder">
												<form class="tg-formtheme tg-formsigninsignup" method="post" enctype="multipart/form-data" action="signin_signup_action.php" >
													<div id="tg-signincategoryslider" class="tg-categoryslider tg-category tg-signincategory">
														<span data-id="doctorscategory" class="item tg-radio">
															<input type="radio" id="doctors" name="maincategory" value="Doctors" checked="">
															<label for="doctors">
																<span><img src="images/icons/icon-08.png" alt="image description"></span>
																<span>Doctors</span>
															</label>
														</span>
														<span data-id="doctorscategory" class="item tg-radio">
															<input type="radio" id="hospitals" name="maincategory" value="Hospitals">
															<label for="hospitals">
																<span><img src="images/icons/icon-09.png" alt="image description"></span>
																<span>Hospitals</span>
															</label>
														</span>
														<span data-id="doctorscategory" class="item tg-radio">
															<input type="radio" id="spas" name="maincategory" value="Spas">
															<label for="spas">
																<span><img src="images/icons/icon-10.png" alt="image description"></span>
																<span>Spas</span>
															</label>
														</span>
														<span data-id="doctorscategory" class="item tg-radio">
															<input type="radio" id="pharmacies" name="maincategory" value="Pharmacies">
															<label for="pharmacies">
																<span><img src="images/icons/icon-11.png" alt="image description"></span>
																<span>Pharmacies</span>
															</label>
														</span>
														<span data-id="doctorscategory" class="item tg-radio">
															<input type="radio" id="labs" name="maincategory" value="Labs">
															<label for="labs">
																<span><img src="images/icons/icon-12.png" alt="image description"></span>
																<span>Labs</span>
															</label>
														</span>
														<span data-id="doctorscategory" class="item tg-radio">
															<input type="radio" id="fitness" name="maincategory" value="Fitness">
															<label for="fitness">
																<span><img src="images/icons/icon-13.png" alt="image description"></span>
																<span>Fitness</span>
															</label>
														</span>
														<span data-id="doctorscategory" class="item tg-radio">
															<input type="radio" id="bloodband" name="maincategory" value="Blood Bank">
															<label for="bloodband">
																<span><img src="images/icons/icon-14.png" alt="image description"></span>
																<span>Blood Bank</span>
															</label>
														</span>
														<span data-id="doctorscategory" class="item tg-radio">
															<input type="radio" id="clinics" name="maincategory" value="Clinics">
															<label for="clinics">
																<span><img src="images/icons/icon-15.png" alt="image description"></span>
																<span>Clinics</span>
															</label>
														</span>
													</div>
													<div id="tg-subcategories" class="tg-subcategories">
														<div id="doctorscategory" class="tg-tabcontent tg-active">
															
																<fieldset>
																	<div class="row tg-rowmargin">
																		<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
																			<div class="form-group tg-formgroup">
																				<span class="tg-select">
																					<select name="title" required>
																						<option value="">Title</option>
																						<option value="Mr.">Mr.</option>
																						<option value="Ms.">Ms.</option>
																					</select>
																				</span>
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
																			<div class="form-group tg-formgroup">
																				<input type="text" name="firstname" class="form-control" placeholder="First Name" required>
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
																			<div class="form-group tg-formgroup">
																				<input type="text" name="lastname" class="form-control" placeholder="Last Name" required>
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
																			<div class="form-group tg-formgroup">
																				<input type="text" name="username" class="form-control" placeholder="Username" required>
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
																			<div class="form-group tg-formgroup">
																				<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
																			</div>
																		</div>
																		<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
																			<div class="form-group tg-formgroup">
																				<input type="password" name="repassword" class="form-control" id="repassword" placeholder="Re-type Password" required>
																			</div>
																		</div>
																		<div class="col-md-6 col-sm-12 col-xs-12 tg-columnpadding">
																			<div class="form-group tg-formgroup">
																				<div class="tg-checkboxbox">
																					<span class="tg-checkbox">
																						<input type="checkbox" id="notrobot" name="notrobot" value="human" required>
																						<label for="notrobot">I am not a robot</label>
																					</span>
																					<a class="tg-refreshcaptcha" href="#"><img src="images/icons/icon-35.jpg" alt="image description"></a>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-6 col-sm-12 col-xs-12">
																			<div class="form-group tg-formgroup">
																				<div class="tg-termscondition">
																					<span class="tg-checkbox">
																						<input type="checkbox" id="currentjob1" name="currentjob" value="I’m doing this currently." required>
																						<label for="currentjob1"> I have read and agree with the <em>terms and conditions</em>.</label>
																					</span>
																				</div>
																			</div>
																		</div>
																		<div class="col-sm-12 col-xs-12 tg-columnpadding">
																			<button type="submit" class="tg-btn" onclick="return Validate()" >Register Now</button>
																		</div>
																	</div>
																</fieldset>
															</form>
															<div class="tg-registervia">
																<div class="tg-title">
																	<h2>Or Register Via</h2>
																</div>
																<ul class="tg-socialiconslarge">
																	<li class="tg-facebook"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
																	<li class="tg-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
																	<li class="tg-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
																	<li class="tg-googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
																	<li class="tg-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
																	<li class="tg-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<div class="col-md-4 col-sm-5 col-xs-12">
							<aside id="tg-sidebar" class="tg-sidebar">
								<div class="tg-widget tg-widgetlogin">
									<div class="tg-widgetcontent">
										<div class="tg-widgettitle">
											<h3>Login Now</h3>
										</div>
										<form class="tg-themeform tg-formsignin" method="post" enctype="multipart/form-data" action="signin_action.php">
											<fieldset>
												<div class="form-group tg-formgroup">
													<input type="text" name="username" class="form-control" id="user_name" placeholder="Username">
												</div>
												<div class="form-group tg-formgroup">
													<input type="password" name="password" class="form-control" id="password_login" placeholder="Username">
												</div>
												<div class="tg-kepploginpassword">
													<div class="tg-checkbox">
														<input type="checkbox" name="name" id="keeplogin">
														<label for="keeplogin">Remember me on this computer</label>
													</div>
												</div>
												<button class="tg-btn tg-btn-lg" type="submit" onclick="return logincheck()" >Login Now</button>
											</fieldset>
										</form>
									</div>
									<a href="#" class="tg-btnforgotpassword">Forgot your password?</a>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->

		<!--************************************
				Footer End
		*************************************-->
<?php include('footer.php'); ?>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/mapclustering/data.json"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="js/mapclustering/markerclusterer.min.js"></script>
	<script src="js/mapclustering/infobox.js"></script>
	<script src="js/bootstrap-timepicker.min.js"></script>
	<script src="js/customScrollbar.min.js"></script>
	<script src="js/mapclustering/map.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/isotope.pkgd.js"></script>
	<script src="js/packery-mode.js"></script>
	<script src="js/svg-injector.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/fullcalendar.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/collapse.js"></script>
	<script src="js/parallax.js"></script>
	<script src="js/readmore.js"></script>
	<script src="js/countTo.js"></script>
	<script src="js/loader.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/gmap3.js"></script>
	<script src="js/main.js"></script>
</body>

<!-- Mirrored from exprostudio.com/html/medlink/signin-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 11:33:16 GMT -->
</html>