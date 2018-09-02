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
	<title>Medlink Directory A Complete Learning Source : Dashboard Appointment Schedule</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php include('../script.php'); ?>

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
							<div class="tg-dashboardappoinmentsetting">
								<ul class="tg-dashboardtabnav" role="tablist">
									<li role="presentation" class="active">
										<a href="#inbox" aria-controls="inbox" role="tab" data-toggle="tab">
											<span>Schedules</span>
										</a>
									</li>
									<li role="presentation">
										<a href="#sent" aria-controls="sent" role="tab" data-toggle="tab">
											<span>Custom Schedules</span>
										</a>
									</li>
								</ul>
								<div class="tab-content tg-maintabscontent tg-cutsomslottabcontent">
									<div role="tabpanel" class="tab-pane active" id="inbox">
										<div class="tg-dashboardbox">
											<div class="tg-dashboardboxtitle">
												<h2>Appointment Schedule</h2>
											</div>
											<form class="tg-themeform tg-formtimeslots">
												<fieldset>
													<div class="tg-appoinmentbox">
														<div class="tg-dateandtimeslots tg-sunday">
															<div class="tg-datebox">
																<time datetime="2011-10-10">Sunday</time>
																<span><a href="#">Add/Edit</a></span>
															</div>
															<div class="tg-timeslots">
																<span>no time slot</span>
															</div>
														</div>
													</div>
												</fieldset>
												<fieldset>
													<div class="tg-appoinmentbox">
														<div class="tg-dateandtimeslots">
															<div class="tg-datebox">
																<time datetime="2011-10-10">Monday</time>
																<span><a href="#">Add/Edit</a></span>
															</div>
															<div class="tg-timeslots">
																<div class="row tg-rowmargin">
																	<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 tg-columnpadding">
																		<div class="form-group tg-formgroup">
																			<input type="text" name="title" class="form-control" placeholder="Title (Optional)">
																		</div>
																	</div>
																	<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 tg-columnpadding">
																		<div class="form-group tg-formgroup">
																			<span class="tg-inputicon tg-calendaricon"><input type="text" name="date" class="form-control tg-datepicker" placeholder="Select Date"></span>
																		</div>
																	</div>
																	<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 tg-columnpadding">
																		<div class="form-group tg-formgroup">
																			<i class="fa fa-clock-o"></i>
																			<input id="tg-timepicker3" type="text" name="startfrom" class="form-control" placeholder="Start From">
																		</div>
																	</div>
																	<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 tg-columnpadding">
																		<div class="form-group tg-formgroup">
																			<i class="fa fa-clock-o"></i>
																			<input id="tg-timepicker4" type="text" name="finishby" class="form-control" placeholder="Finish By">
																		</div>
																	</div>
																	<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 tg-columnpadding">
																		<div class="form-group tg-formgroup">
																			<span class="tg-select">
																				<select>
																					<option>Interval</option>
																					<option>Interval</option>
																					<option>Interval</option>
																				</select>
																			</span>
																		</div>
																	</div>
																	<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 tg-columnpadding">
																		<div class="form-group tg-formgroup">
																			<span class="tg-select">
																				<select>
																					<option>Meeting Duration</option>
																					<option>Meeting Duration</option>
																					<option>Meeting Duration</option>
																				</select>
																			</span>
																		</div>
																	</div>
																	<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 tg-columnpadding">
																		<div class="form-group tg-formgroup">
																			<span class="tg-select">
																				<select>
																					<option>Spaces</option>
																					<option>Spaces</option>
																					<option>Spaces</option>
																				</select>
																			</span>
																		</div>
																	</div>
																	<div class="col-sm-12 col-xs-12 tg-columnpadding">
																		<a class="tg-btn" href="#">Add Slots</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</fieldset>
												<fieldset>
													<div class="tg-appoinmentbox">
														<div class="tg-dateandtimeslots tg-tuesday">
															<div class="tg-datebox">
																<time datetime="2011-10-10">Tuesday</time>
																<ul class="tg-btnadddelt">
																	<li><span><a href="#">Add/Edit</a></span></li>
																	<li><span><a href="#">Delete</a></span></li>
																</ul>
															</div>
															<div class="tg-timeslots">
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot61" name="firstavailableslot">
																	<label for="firstavailableslot61">
																		<span class="tg-timetitle">Title Here</span>
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot62" name="firstavailableslot">
																	<label for="firstavailableslot62">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot63" name="firstavailableslot">
																	<label for="firstavailableslot63">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot64" name="firstavailableslot">
																	<label for="firstavailableslot64">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot65" name="firstavailableslot">
																	<label for="firstavailableslot65">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot66" name="firstavailableslot">
																	<label for="firstavailableslot66">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot67" name="firstavailableslot">
																	<label for="firstavailableslot67">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot68" name="firstavailableslot">
																	<label for="firstavailableslot68">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot69" name="firstavailableslot">
																	<label for="firstavailableslot69">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot70" name="firstavailableslot">
																	<label for="firstavailableslot70">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
															</div>
														</div>
													</div>
												</fieldset>
												<fieldset>
													<div class="tg-appoinmentbox">
														<div class="tg-dateandtimeslots tg-tuesday">
															<div class="tg-datebox">
																<time datetime="2011-10-10">Wednesday</time>
																<ul class="tg-btnadddelt">
																	<li><span><a href="#">Add/Edit</a></span></li>
																	<li><span><a href="#">Delete</a></span></li>
																</ul>
															</div>
															<div class="tg-timeslots">
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot71" name="firstavailableslot">
																	<label for="firstavailableslot71">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot72" name="firstavailableslot">
																	<label for="firstavailableslot72">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot73" name="firstavailableslot">
																	<label for="firstavailableslot73">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot74" name="firstavailableslot">
																	<label for="firstavailableslot74">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot75" name="firstavailableslot">
																	<label for="firstavailableslot75">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot76" name="firstavailableslot">
																	<label for="firstavailableslot76">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot77" name="firstavailableslot">
																	<label for="firstavailableslot77">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot78" name="firstavailableslot">
																	<label for="firstavailableslot78">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot79" name="firstavailableslot">
																	<label for="firstavailableslot79">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot80" name="firstavailableslot">
																	<label for="firstavailableslot80">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
															</div>
														</div>
													</div>
												</fieldset>
												<fieldset>
													<div class="tg-appoinmentbox">
														<div class="tg-dateandtimeslots tg-tuesday">
															<div class="tg-datebox">
																<time datetime="2011-10-10">Thursday</time>
																<ul class="tg-btnadddelt">
																	<li><span><a href="#">Add/Edit</a></span></li>
																	<li><span><a href="#">Delete</a></span></li>
																</ul>
															</div>
															<div class="tg-timeslots">
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot81" name="firstavailableslot">
																	<label for="firstavailableslot81">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot82" name="firstavailableslot">
																	<label for="firstavailableslot82">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot83" name="firstavailableslot">
																	<label for="firstavailableslot83">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot84" name="firstavailableslot">
																	<label for="firstavailableslot84">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot85" name="firstavailableslot">
																	<label for="firstavailableslot85">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot86" name="firstavailableslot">
																	<label for="firstavailableslot86">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot87" name="firstavailableslot">
																	<label for="firstavailableslot87">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot88" name="firstavailableslot">
																	<label for="firstavailableslot88">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot89" name="firstavailableslot">
																	<label for="firstavailableslot89">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot90" name="firstavailableslot">
																	<label for="firstavailableslot90">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
															</div>
														</div>
													</div>
												</fieldset>
												<fieldset>
													<div class="tg-appoinmentbox">
														<div class="tg-dateandtimeslots tg-tuesday">
															<div class="tg-datebox">
																<time datetime="2011-10-10">Friday</time>
																<ul class="tg-btnadddelt">
																	<li><span><a href="#">Add/Edit</a></span></li>
																	<li><span><a href="#">Delete</a></span></li>
																</ul>
															</div>
															<div class="tg-timeslots">
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot91" name="firstavailableslot">
																	<label for="firstavailableslot91">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot92" name="firstavailableslot">
																	<label for="firstavailableslot92">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot93" name="firstavailableslot">
																	<label for="firstavailableslot93">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot94" name="firstavailableslot">
																	<label for="firstavailableslot94">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot95" name="firstavailableslot">
																	<label for="firstavailableslot95">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot96" name="firstavailableslot">
																	<label for="firstavailableslot96">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot97" name="firstavailableslot">
																	<label for="firstavailableslot97">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot98" name="firstavailableslot">
																	<label for="firstavailableslot98">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot99" name="firstavailableslot">
																	<label for="firstavailableslot99">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot100" name="firstavailableslot">
																	<label for="firstavailableslot100">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
															</div>
														</div>
													</div>
												</fieldset>
												<fieldset>
													<div class="tg-appoinmentbox">
														<div class="tg-dateandtimeslots tg-tuesday">
															<div class="tg-datebox">
																<time datetime="2011-10-10">Saturday</time>
																<ul class="tg-btnadddelt">
																	<li><span><a href="#">Add/Edit</a></span></li>
																	<li><span><a href="#">Delete</a></span></li>
																</ul>
															</div>
															<div class="tg-timeslots">
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot101" name="firstavailableslot">
																	<label for="firstavailableslot101">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot102" name="firstavailableslot">
																	<label for="firstavailableslot102">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot103" name="firstavailableslot">
																	<label for="firstavailableslot103">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot104" name="firstavailableslot">
																	<label for="firstavailableslot104">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot105" name="firstavailableslot">
																	<label for="firstavailableslot105">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot106" name="firstavailableslot">
																	<label for="firstavailableslot106">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot107" name="firstavailableslot">
																	<label for="firstavailableslot107">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot108" name="firstavailableslot">
																	<label for="firstavailableslot108">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot109" name="firstavailableslot">
																	<label for="firstavailableslot109">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
																<span class="tg-radio">
																	<input type="radio" id="firstavailableslot110" name="firstavailableslot">
																	<label for="firstavailableslot110">
																		<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																		<span>Title Here</span>
																		<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																		<span class="tg-description">Spaces: 02 Available</span>
																	</label>
																</span>
															</div>
														</div>
													</div>
												</fieldset>
											</form>
										</div>
										<div class="tg-updateall">
											<span class="tg-note">* Click <strong>update all changes</strong> to update latest added detail (s).</span>
											<button class="tg-btn" type="submit">update now</button>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane fade in" id="sent">
										<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Custom Appointment Schedule</h2>
										</div>
										<form class="tg-themeform tg-formtimeslots">
											<fieldset>
												<div class="tg-appoinmentbox">
													<div class="tg-dateandtimeslots tg-sunday">
														<div class="tg-datebox">
															<time datetime="2011-10-10">Custom Slot</time>
															<span><a href="#">Add/Edit</a></span>
														</div>
														<div class="tg-timeslots">
															<span>No Custom Time Slots</span>
														</div>
													</div>
												</div>
											</fieldset>
											<fieldset>
												<div class="tg-appoinmentbox">
													<div class="tg-dateandtimeslots">
														<div class="tg-datebox">
															<time datetime="2011-10-10">Custom Slot</time>
															<span><a href="#">Add/Edit</a></span>
														</div>
														<div class="tg-timeslots">
															<div class="row tg-rowmargin">
																<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 tg-columnpadding">
																	<div class="form-group tg-formgroup">
																		<input type="text" name="title" class="form-control" placeholder="Title (Optional)">
																	</div>
																</div>
																<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 tg-columnpadding">
																	<div class="form-group tg-formgroup">
																		<span class="tg-inputicon tg-calendaricon"><input type="text" name="starttime" class="form-control tg-datepicker" placeholder="Start Time"></span>
																	</div>
																</div>
																<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 tg-columnpadding">
																	<div class="form-group tg-formgroup">
																		<span class="tg-inputicon tg-calendaricon"><input type="text" name="starttime" class="form-control tg-datepicker" placeholder="End Time"></span>
																	</div>
																</div>
																<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 tg-columnpadding">
																	<div class="form-group tg-formgroup">
																		<i class="fa fa-clock-o"></i>
																		<input id="tg-timepicker1" type="text" name="startfrom" class="form-control" placeholder="Start From">
																	</div>
																</div>
																<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 tg-columnpadding">
																	<div class="form-group tg-formgroup">
																		<i class="fa fa-clock-o"></i>
																		<input id="tg-timepicker2" type="text" name="finishby" class="form-control" placeholder="Finish By">
																	</div>
																</div>
																<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 tg-columnpadding">
																	<div class="form-group tg-formgroup">
																		<span class="tg-select">
																			<select>
																				<option>Interval</option>
																				<option>Interval</option>
																				<option>Interval</option>
																			</select>
																		</span>
																	</div>
																</div>
																<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 tg-columnpadding">
																	<div class="form-group tg-formgroup">
																		<span class="tg-select">
																			<select>
																				<option>Meeting Duration</option>
																				<option>Meeting Duration</option>
																				<option>Meeting Duration</option>
																			</select>
																		</span>
																	</div>
																</div>
																<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 tg-columnpadding">
																	<div class="form-group tg-formgroup">
																		<span class="tg-select">
																			<select>
																				<option>Spaces</option>
																				<option>Spaces</option>
																				<option>Spaces</option>
																			</select>
																		</span>
																	</div>
																</div>
																<div class="col-sm-12 col-xs-12 tg-columnpadding">
																	<a class="tg-btn" href="#">Add Slots</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</fieldset>
											<fieldset>
												<div class="tg-appoinmentbox">
													<div class="tg-dateandtimeslots tg-tuesday">
														<div class="tg-datebox">
															<time datetime="2011-10-10">Jun 27, 2017</time>
															<ul class="tg-btnadddelt">
																<li><span><a href="#">Add/Edit</a></span></li>
																<li><span><a href="#">Delete</a></span></li>
															</ul>
														</div>
														<div class="tg-timeslots">
															<span class="tg-radio">
																<input type="radio" id="firstavailableslot111" name="firstavailableslot">
																<label for="firstavailableslot111">
																	<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																	<span>Title Here</span>
																	<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																	<span class="tg-description">Spaces: 02 Available</span>
																</label>
															</span>
															<span class="tg-radio">
																<input type="radio" id="firstavailableslot112" name="firstavailableslot">
																<label for="firstavailableslot112">
																	<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																	<span>Title Here</span>
																	<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																	<span class="tg-description">Spaces: 02 Available</span>
																</label>
															</span>
															<span class="tg-radio">
																<input type="radio" id="firstavailableslot113" name="firstavailableslot">
																<label for="firstavailableslot113">
																	<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																	<span>Title Here</span>
																	<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																	<span class="tg-description">Spaces: 02 Available</span>
																</label>
															</span>
															<span class="tg-radio">
																<input type="radio" id="firstavailableslot114" name="firstavailableslot">
																<label for="firstavailableslot114">
																	<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																	<span>Title Here</span>
																	<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																	<span class="tg-description">Spaces: 02 Available</span>
																</label>
															</span>
															<span class="tg-radio">
																<input type="radio" id="firstavailableslot115" name="firstavailableslot">
																<label for="firstavailableslot115">
																	<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																	<span>Title Here</span>
																	<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																	<span class="tg-description">Spaces: 02 Available</span>
																</label>
															</span>
															<span class="tg-radio">
																<input type="radio" id="firstavailableslot116" name="firstavailableslot">
																<label for="firstavailableslot116">
																	<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																	<span>Title Here</span>
																	<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																	<span class="tg-description">Spaces: 02 Available</span>
																</label>
															</span>
															<span class="tg-radio">
																<input type="radio" id="firstavailableslot117" name="firstavailableslot">
																<label for="firstavailableslot117">
																	<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																	<span>Title Here</span>
																	<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																	<span class="tg-description">Spaces: 02 Available</span>
																</label>
															</span>
															<span class="tg-radio">
																<input type="radio" id="firstavailableslot118" name="firstavailableslot">
																<label for="firstavailableslot118">
																	<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																	<span>Title Here</span>
																	<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																	<span class="tg-description">Spaces: 02 Available</span>
																</label>
															</span>
															<span class="tg-radio">
																<input type="radio" id="firstavailableslot119" name="firstavailableslot">
																<label for="firstavailableslot119">
																	<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																	<span>Title Here</span>
																	<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																	<span class="tg-description">Spaces: 02 Available</span>
																</label>
															</span>
															<span class="tg-radio">
																<input type="radio" id="firstavailableslot120" name="firstavailableslot">
																<label for="firstavailableslot120">
																	<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																	<span>Title Here</span>
																	<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																	<span class="tg-description">Spaces: 02 Available</span>
																</label>
															</span>
														</div>
													</div>
												</div>
											</fieldset>
											<fieldset>
												<div class="tg-appoinmentbox">
													<div class="tg-dateandtimeslots tg-tuesday">
														<div class="tg-datebox">
															<time datetime="2011-10-10">Jun 27, 2017</time>
															<ul class="tg-btnadddelt">
																<li><span><a href="#">Add/Edit</a></span></li>
																<li><span><a href="#">Delete</a></span></li>
															</ul>
														</div>
														<div class="tg-timeslots">
															<span class="tg-radio">
																<input type="radio" id="firstavailableslot121" name="firstavailableslot">
																<label for="firstavailableslot121">
																	<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																	<span>Title Here</span>
																	<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																	<span class="tg-description">Spaces: 02 Available</span>
																</label>
															</span>
															<span class="tg-radio">
																<input type="radio" id="firstavailableslot122" name="firstavailableslot">
																<label for="firstavailableslot122">
																	<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																	<span>Title Here</span>
																	<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																	<span class="tg-description">Spaces: 02 Available</span>
																</label>
															</span>
															<span class="tg-radio">
																<input type="radio" id="firstavailableslot123" name="firstavailableslot">
																<label for="firstavailableslot123">
																	<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																	<span>Title Here</span>
																	<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																	<span class="tg-description">Spaces: 02 Available</span>
																</label>
															</span>
															<span class="tg-radio">
																<input type="radio" id="firstavailableslot124" name="firstavailableslot">
																<label for="firstavailableslot124">
																	<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																	<span>Title Here</span>
																	<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																	<span class="tg-description">Spaces: 02 Available</span>
																</label>
															</span>
															<span class="tg-radio">
																<input type="radio" id="firstavailableslot125" name="firstavailableslot">
																<label for="firstavailableslot125">
																	<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																	<span>Title Here</span>
																	<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																	<span class="tg-description">Spaces: 02 Available</span>
																</label>
															</span>
															<span class="tg-radio">
																<input type="radio" id="firstavailableslot126" name="firstavailableslot">
																<label for="firstavailableslot126">
																	<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																	<span>Title Here</span>
																	<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																	<span class="tg-description">Spaces: 02 Available</span>
																</label>
															</span>
															<span class="tg-radio">
																<input type="radio" id="firstavailableslot127" name="firstavailableslot">
																<label for="firstavailableslot127">
																	<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																	<span>Title Here</span>
																	<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																	<span class="tg-description">Spaces: 02 Available</span>
																</label>
															</span>
															<span class="tg-radio">
																<input type="radio" id="firstavailableslot128" name="firstavailableslot">
																<label for="firstavailableslot128">
																	<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																	<span>Title Here</span>
																	<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																	<span class="tg-description">Spaces: 02 Available</span>
																</label>
															</span>
															<span class="tg-radio">
																<input type="radio" id="firstavailableslot129" name="firstavailableslot">
																<label for="firstavailableslot129">
																	<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																	<span>Title Here</span>
																	<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																	<span class="tg-description">Spaces: 02 Available</span>
																</label>
															</span>
															<span class="tg-radio">
																<input type="radio" id="firstavailableslot230" name="firstavailableslot">
																<label for="firstavailableslot230">
																	<a class="tg-btndelete" href="#"><i class="fa fa-minus"></i></a>
																	<span>Title Here</span>
																	<time class="tg-scheduletime" datetime="2016-12-12">08:00 - 09:00</time>
																	<span class="tg-description">Spaces: 02 Available</span>
																</label>
															</span>
														</div>
													</div>
												</div>
											</fieldset>
										</form>
									</div>
										<div class="tg-updateall">
											<span class="tg-note">* Click <strong>update all changes</strong> to update latest added detail (s).</span>
											<button class="tg-btn" type="submit">update now</button>
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
	
	
</body>

</html>