<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
	header("Location:../signin-signup.php");
		}
		
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Medlink Directory A Complete Learning Source : Dashboard</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/jquery.countdown.css">
	<link rel="stylesheet" href="../css/customScrollbar.css">
	<link rel="stylesheet" href="../css/bootstrap-timepicker.min.css">
	<link rel="stylesheet" href="../css/fullcalendar.min.css">
	<link rel="stylesheet" href="../css/owl.carousel.css">
	<link rel="stylesheet" href="../css/owl.theme.css">
	<link rel="stylesheet" href="../css/jquery-ui.css">
	<link rel="stylesheet" href="../css/transitions.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../css/color.css">
	<link rel="stylesheet" href="../css/responsive.css">
	<script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body class="tg-login">
	
	<div class="preloader-outer">
		<div class="pin"></div>
		<div class="pulse"></div>
	</div>
	
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">

	<?php include('header_doctor.php'); ?>
		
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					<div id="tg-content" class="tg-content tg-dashboard">

						<?php include('header_doctor_sidebar.php'); ?>
						
						<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right">
							<div class="row">
								<div class="col-sm-12 col-xs-12">
									<div class="tg-alertmessages">
										<div class="alert alert-success tg-alertmessage fade in">
											<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
											<i class="fa fa-check"></i>
											<span><strong>success Message.</strong> Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minimati.</span>
										</div>
										<div class="alert alert-info tg-alertmessage fade in">
											<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
											<i class="fa fa-commenting-o"></i>
											<span><strong>info Message.</strong> Adipisicing elit, sed do eiusmod temp labore et dolore magna aliqua enim ad minimati.</span>
										</div>
										<div class="alert alert-warning tg-alertmessage fade in">
											<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
											<i class="fa fa-exclamation-triangle"></i>
											<span><strong>warning Message.</strong> Adipisicing elit, sed do eiusmod tempor  dolore magna aliqua enim ad minimati.</span>
										</div>
										<div class="alert alert-danger tg-alertmessage fade in">
											<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
											<i class="fa fa-bug"></i>
											<span><strong>Error Message.</strong> Adipisicing elit, sed do eiusmod et dolore magna aliqua enim ad minimati.</span>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-xs-12">
									<div class="tg-section">
										<div class="tg-badgesearned">
											<h3>Badges Earned</h3>
											<a class="tg-refresh tg-update fa fa-refresh" href="#"></a>
											<ul class="tg-badges">
												<li><a class="tg-tooltip tg-tooltipwhite" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Badge Title"><img src="images/badges/badge-01.png" alt="image description"></a></li>
												<li><a class="tg-tooltip tg-tooltipwhite" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Badge Title"><img src="images/badges/badge-02.png" alt="image description"></a></li>
												<li><a class="tg-tooltip tg-tooltipwhite" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Badge Title"><img src="images/badges/badge-03.png" alt="image description"></a></li>
												<li><a class="tg-tooltip tg-tooltipwhite" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Badge Title"><img src="images/badges/badge-04.png" alt="image description"></a></li>
												<li><a class="tg-tooltip tg-tooltipwhite" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Badge Title"><img src="images/badges/badge-05.png" alt="image description"></a></li>
												<li><a class="tg-tooltip tg-tooltipwhite" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Badge Title"><img src="images/badges/badge-06.png" alt="image description"></a></li>
												<li><a class="tg-tooltip tg-tooltipwhite" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Badge Title"><img src="images/badges/badge-07.png" alt="image description"></a></li>
												<li><a class="tg-tooltip tg-tooltipwhite" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Badge Title"><img src="images/badges/badge-08.png" alt="image description"></a></li>
												<li><a class="tg-tooltip tg-tooltipwhite" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Badge Title"><img src="images/badges/badge-09.png" alt="image description"></a></li>
												<li><a class="tg-tooltip tg-tooltipwhite" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Badge Title"><img src="images/badges/badge-10.png" alt="image description"></a></li>
												<li><a class="tg-tooltip tg-tooltipwhite" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Badge Title"><img src="images/badges/badge-11.png" alt="image description"></a></li>
												<li><a class="tg-tooltip tg-tooltipwhite" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Badge Title"><img src="images/badges/badge-12.png" alt="image description"></a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="tg-profilewidget tg-recommendation">
										<a class="tg-refresh fa fa-refresh" href="#"></a>
										<h3>Total Recommendation</h3>
										<span class="tg-profilewidgeticon">
											<img src="images/icons/icon-26.png" alt="image description">
										</span>
										<div class="tg-percentage">
											<span>99%</span>
											<span>Recommendation You Received</span>
										</div>
										<div class="tg-description">
											<p><strong>1009 People Voted For You!</strong> Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="tg-profilewidget tg-favourites">
										<a class="tg-refresh fa fa-refresh" href="#"></a>
										<h3>Total Added To Favourites</h3>
										<span class="tg-profilewidgeticon">
											<img src="images/icons/icon-27.png" alt="image description">
										</span>
										<div class="tg-followers">
											<span>15092</span>
											<span>People Added You In Favourite List</span>
										</div>
										<div class="tg-description">
											<p><strong>1009 People Voted For You!</strong> Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-xs-12">
									<div class="tg-profilewidget tg-monthlyviews">
										<a class="tg-refresh fa fa-refresh" href="#"></a>
										<h3>Monthly Views</h3>
										<div class="tg-monthlyviewstab">
											<div class="tg-monthlyviewstabnavtotlalviews">
												<div class="tg-totalviews">
													<span>15092</span>
													<span>Total Views In Spetember</span>
												</div>
												<ul class="tg-monthlyviewstabnav" role="tablist">
													<li role="presentation" class="active"><a href="#september" aria-controls="september" role="tab" data-toggle="tab">september 2016</a></li>
													<li role="presentation"><a href="#august" aria-controls="august" role="tab" data-toggle="tab">august 2016</a></li>
													<li role="presentation"><a href="#july" aria-controls="july" role="tab" data-toggle="tab">july 2016</a></li>
													<li role="presentation"><a href="#june" aria-controls="june" role="tab" data-toggle="tab">june 2016</a></li>
													<li role="presentation"><a href="#may" aria-controls="may" role="tab" data-toggle="tab">may 2016</a></li>
												</ul>
											</div>
											<div class="tab-content tg-monthlyviewstabcontent">
												<div role="tabpanel" class="tab-pane active" id="september">
													<div id="tg-viewpermonthchartone" class="tg-themechart tg-viewpermonthchart"></div>
												</div>
												<div role="tabpanel" class="tab-pane" id="august">
													<div id="tg-viewpermonthcharttwo" class="tg-themechart tg-viewpermonthchart"></div>
												</div>
												<div role="tabpanel" class="tab-pane" id="july">
													<div id="tg-viewpermonthchartthree" class="tg-themechart tg-viewpermonthchart"></div>
												</div>
												<div role="tabpanel" class="tab-pane" id="june">
													<div id="tg-viewpermonthchartfour" class="tg-themechart tg-viewpermonthchart"></div>
												</div>
												<div role="tabpanel" class="tab-pane" id="may">
													<div id="tg-viewpermonthchartfive" class="tg-themechart tg-viewpermonthchart"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="tg-profilewidget tg-latestreviews">
										<a class="tg-refresh fa fa-refresh" href="#"></a>
										<h3>Total Recommendation</h3>
										<span class="tg-profilewidgeticon">
											<img src="images/icons/icon-28.png" alt="image description">
										</span>
										<div class="tg-percentage">
											<div class="tg-startsratingbox">
												<span class="tg-stars"><span></span></span>
											</div>
											<span class="tg-subtitle">Recommendation You Received</span>
										</div>
										<ul class="tg-posttype tg-reviews tg-themescrollbar">
											<li>
												<figure>
													<img src="images/thumbnails/img-07.jpg" alt="image description">
													<figcaption><a href="#"><i class="fa fa-reply "></i></a></figcaption>
												</figure>
												<div class="tg-reviewcontent">
													<div class="tg-reviewhead">
														<h4><a href="#">Dr. Steve Northrop</a></h4><time datetime="2011-12-12">(5 Min Ago)</time>
													</div>
													<div class="tg-description">
														<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/thumbnails/img-08.jpg" alt="image description">
													<figcaption><a href="#"><i class="fa fa-reply "></i></a></figcaption>
												</figure>
												<div class="tg-reviewcontent">
													<div class="tg-reviewhead">
														<h4><a href="#">Dr. Steve Northrop</a></h4><time datetime="2011-12-12">(5 Min Ago)</time>
													</div>
													<div class="tg-description">
														<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/thumbnails/img-09.jpg" alt="image description">
													<figcaption><a href="#"><i class="fa fa-reply "></i></a></figcaption>
												</figure>
												<div class="tg-reviewcontent">
													<div class="tg-reviewhead">
														<h4><a href="#">Dr. Steve Northrop</a></h4><time datetime="2011-12-12">(5 Min Ago)</time>
													</div>
													<div class="tg-description">
														<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/thumbnails/img-10.jpg" alt="image description">
													<figcaption><a href="#"><i class="fa fa-reply "></i></a></figcaption>
												</figure>
												<div class="tg-reviewcontent">
													<div class="tg-reviewhead">
														<h4><a href="#">Dr. Steve Northrop</a></h4><time datetime="2011-12-12">(5 Min Ago)</time>
													</div>
													<div class="tg-description">
														<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/thumbnails/img-11.jpg" alt="image description">
													<figcaption><a href="#"><i class="fa fa-reply "></i></a></figcaption>
												</figure>
												<div class="tg-reviewcontent">
													<div class="tg-reviewhead">
														<h4><a href="#">Dr. Steve Northrop</a></h4><time datetime="2011-12-12">(5 Min Ago)</time>
													</div>
													<div class="tg-description">
														<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/thumbnails/img-10.jpg" alt="image description">
													<figcaption><a href="#"><i class="fa fa-reply "></i></a></figcaption>
												</figure>
												<div class="tg-reviewcontent">
													<div class="tg-reviewhead">
														<h4><a href="#">Dr. Steve Northrop</a></h4><time datetime="2011-12-12">(5 Min Ago)</time>
													</div>
													<div class="tg-description">
														<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/thumbnails/img-11.jpg" alt="image description">
													<figcaption><a href="#"><i class="fa fa-reply "></i></a></figcaption>
												</figure>
												<div class="tg-reviewcontent">
													<div class="tg-reviewhead">
														<h4><a href="#">Dr. Steve Northrop</a></h4><time datetime="2011-12-12">(5 Min Ago)</time>
													</div>
													<div class="tg-description">
														<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/thumbnails/img-10.jpg" alt="image description">
													<figcaption><a href="#"><i class="fa fa-reply "></i></a></figcaption>
												</figure>
												<div class="tg-reviewcontent">
													<div class="tg-reviewhead">
														<h4><a href="#">Dr. Steve Northrop</a></h4><time datetime="2011-12-12">(5 Min Ago)</time>
													</div>
													<div class="tg-description">
														<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/thumbnails/img-11.jpg" alt="image description">
													<figcaption><a href="#"><i class="fa fa-reply "></i></a></figcaption>
												</figure>
												<div class="tg-reviewcontent">
													<div class="tg-reviewhead">
														<h4><a href="#">Dr. Steve Northrop</a></h4><time datetime="2011-12-12">(5 Min Ago)</time>
													</div>
													<div class="tg-description">
														<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
													</div>
												</div>
											</li>
										</ul>
										<div class="tg-btnbox">
											<a class="tg-btn" href="#">View All</a>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="tg-profilewidget tg-askquestion">
										<a class="tg-refresh fa fa-refresh" href="#"></a>
										<h3>Total Added To Favourites</h3>
										<span class="tg-profilewidgeticon">
											<img src="images/icons/icon-29.png" alt="image description">
										</span>
										<div class="tg-followers">
											<span>15092</span>
											<span>People Added You In Favourite List</span>
										</div>
										<div class="tg-description">
											<p><strong>523 People found you not helpful</strong> Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
										</div>
										<ul class="tg-posttype tg-askquestions tg-themescrollbar">
											<li>
												<figure>
													<img src="images/thumbnails/img-07.jpg" alt="image description">
													<figcaption><a href="#"><i class="fa fa-reply "></i></a></figcaption>
												</figure>
												<div class="tg-reviewcontent">
													<div class="tg-reviewhead">
														<h4><a href="#">Dr. Steve Northrop</a></h4><time datetime="2011-12-12">(5 Min Ago)</time>
													</div>
													<div class="tg-description">
														<p>Anisi ut aliquip ex ea commodo consequat aute irure dolor in reprehenderit voluptate velit esse cillum dolore.</p>
													</div>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/thumbnails/img-08.jpg" alt="image description">
													<figcaption><a href="#"><i class="fa fa-reply "></i></a></figcaption>
												</figure>
												<div class="tg-reviewcontent">
													<div class="tg-reviewhead">
														<h4><a href="#">Dr. Steve Northrop</a></h4><time datetime="2011-12-12">(5 Min Ago)</time>
													</div>
													<div class="tg-description">
														<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore sitasa magna aliqua enim ad minim veniam quist nostrud exercitation ullamco laboris.</p>
													</div>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/thumbnails/img-09.jpg" alt="image description">
													<figcaption><a href="#"><i class="fa fa-reply "></i></a></figcaption>
												</figure>
												<div class="tg-reviewcontent">
													<div class="tg-reviewhead">
														<h4><a href="#">Dr. Steve Northrop</a></h4><time datetime="2011-12-12">(5 Min Ago)</time>
													</div>
													<div class="tg-description">
														<p>Anisi ut aliquip ex ea commodo consequat aute irure dolor in reprehenderit voluptate velit esse cillum dolore.</p>
													</div>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/thumbnails/img-10.jpg" alt="image description">
													<figcaption><a href="#"><i class="fa fa-reply "></i></a></figcaption>
												</figure>
												<div class="tg-reviewcontent">
													<div class="tg-reviewhead">
														<h4><a href="#">Dr. Steve Northrop</a></h4><time datetime="2011-12-12">(5 Min Ago)</time>
													</div>
													<div class="tg-description">
														<p>Anisi ut aliquip ex ea commodo consequat aute irure dolor in reprehenderit voluptate velit esse cillum dolore.</p>
													</div>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/thumbnails/img-11.jpg" alt="image description">
													<figcaption><a href="#"><i class="fa fa-reply "></i></a></figcaption>
												</figure>
												<div class="tg-reviewcontent">
													<div class="tg-reviewhead">
														<h4><a href="#">Dr. Steve Northrop</a></h4><time datetime="2011-12-12">(5 Min Ago)</time>
													</div>
													<div class="tg-description">
														<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore sitasa magna aliqua enim ad minim veniam quist nostrud exercitation ullamco laboris.</p>
													</div>
												</div>
											</li>
											<li>
												<figure>
													<img src="images/thumbnails/img-12.jpg" alt="image description">
													<figcaption><a href="#"><i class="fa fa-reply "></i></a></figcaption>
												</figure>
												<div class="tg-reviewcontent">
													<div class="tg-reviewhead">
														<h4><a href="#">Dr. Steve Northrop</a></h4><time datetime="2011-12-12">(5 Min Ago)</time>
													</div>
													<div class="tg-description">
														<p>Anisi ut aliquip ex ea commodo consequat aute irure dolor in reprehenderit voluptate velit esse cillum dolore.</p>
													</div>
												</div>
											</li>
										</ul>
										<div class="tg-btnbox">
											<a class="tg-btn" href="#">View All</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				</div>
			</div>
		</main>	
	
	<?php include('footer_doctor.php'); ?>

	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="../js/vendor/jquery-library.js"></script>
	<script src="../js/vendor/bootstrap.min.js"></script>
	<script src="../js/mapclustering/data.json"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="../js/mapclustering/markerclusterer.min.js"></script>
	<script src="../js/mapclustering/infobox.js"></script>
	<script src="../js/bootstrap-timepicker.min.js"></script>
	<script src="../js/customScrollbar.min.js"></script>
	<script src="../js/mapclustering/map.js"></script>
	<script src="../js/jquery.countdown.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/isotope.pkgd.js"></script>
	<script src="../js/packery-mode.js"></script>
	<script src="../js/svg-injector.js"></script>
	<script src="../js/moment.min.js"></script>
	<script src="../js/fullcalendar.min.js"></script>
	<script src="../js/jquery-ui.js"></script>
	<script src="../js/collapse.js"></script>
	<script src="../js/parallax.js"></script>
	<script src="../js/readmore.js"></script>
	<script src="../js/countTo.js"></script>
	<script src="../js/loader.js"></script>
	<script src="../js/appear.js"></script>
	<script src="../js/gmap3.js"></script>
	<script src="../js/main.js"></script>
	<script>
		jQuery(document).ready(function(event) {
			//function function_name() {
			init_monthsviewcharts('tg-viewpermonthchartone');
			init_monthsviewcharts('tg-viewpermonthcharttwo');
			init_monthsviewcharts('tg-viewpermonthchartthree');
			init_monthsviewcharts('tg-viewpermonthchartfour');
			init_monthsviewcharts('tg-viewpermonthchartfive');
			/*}
			function_name();
			jQuery('.tg-monthlyviewstabnav li').on('click', 'a', function(){
				function_name();
			});*/
		});
	</script>

<!-- Mirrored from exprostudio.com/html/medlink/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 11:33:18 GMT -->
</html>