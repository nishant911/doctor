
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 pull-left">
		<?php
						include 'dbconnection.php';
						$con = OpenCon();
						$query_details = "select * from doctors where username='$_SESSION[username]'";
						$result_details = mysqli_query($con, $query_details);
						$row_details = mysqli_fetch_array($result_details);
						mysqli_close($con);

						$con = OpenCon();
						$query_pic = "select * from profile_pic where username='$_SESSION[username]'";
						$result_pic = mysqli_query($con, $query_pic);
						$row_pic = mysqli_fetch_array($result_pic);
						mysqli_close($con);

			?>
							<div class="tg-widgetdashboard">
								<div class="tg-widgetprofile">
									<figure class="tg-directpostimg">
										<a href="#"><img src="uploads/<?php echo $row_pic['profile_pic']; ?>" alt="image description"></a>
										<figcaption>
											<a class="tg-usericon tg-iconfeatured" href="#">
												<em class="tg-usericonholder">
													<i class="fa fa-bolt"></i>
													<span>featured</span>
												</em>
											</a>
											<a class="tg-usericon tg-iconvarified" href="#">
												<em class="tg-usericonholder">
													<i class="fa fa-shield"></i>
													<span>varified</span>
												</em>
											</a>
										</figcaption>
									</figure>
									<div class="tg-directposthead">
										<h3><a href="#"><?php echo $row_details['firstname'] . "  " . $row_details['lastname']; ?></a></h3>
										<div class="tg-subjects"><?php echo $row_details['subtitle']; ?></div>
										<ul class="tg-metadata">
											<li><span class="tg-stars"><span></span></span></li>
											<li><a href="#"><i class="fa fa-thumbs-o-up"></i> 99% (1009 votes)</a></li>
										</ul>
									</div>
									<a class="tg-btn tg-btn-lg" href="#">Edit Profile</a>
								</div>
								<nav id="tg-dashboardnav" class="tg-dashboardnav">
									<ul>
										<li class="tg-active">
											<a href="dashboard.html">
												<i class="fa fa-line-chart"></i>
												<span>Insights</span>
											</a>
										</li>
										<li>
											<a href="dashboard-badgepopup.html">
												<i class="fa fa-line-chart"></i>
												<span>Insights two</span>
											</a>
										</li>
										<li class="tg-warningmessage">
											<a href="dashboard-profilesetting.php">
												<i class="fa fa-user"></i>
												<span>Profile Settings</span>
											</a>
										</li>
										<li>
											<a href="dashboard-jobslocations.html">
												<i class="fa fa-location-arrow"></i>
												<span>Job Locations</span>
											</a>
										</li>
										<li>
											<a href="dashboard-privatemessages.html">
												<i class="fa fa-envelope-o"></i>
												<span>Private Messages</span>
											</a>
										</li>
										<li class="tg-successmessage">
											<a href="dashboard-appointments.html">
												<i class="fa fa-calendar-check-o"></i>
												<span>Appointments</span>
											</a>
										</li>
										<li class="tg-errormessage">
											<a href="dashboard-appoinmentsetting.php">
												<i class="fa fa-gear"></i>
												<span>Appointment Settings</span>
											</a>
										</li>
										<li>
											<a href="dashboard-favoritlisting.html">
												<i class="fa fa-heart"></i>
												<span>Favourite Listings</span>
											</a>
										</li>
										<li>
											<a href="dashboard-invoices.html">
												<i class="fa fa-clone"></i>
												<span>Invoices</span>
											</a>
										</li>
										<li>
											<a href="dashboard-upgradepackage.html">
												<i class="fa fa-arrow-up"></i>
												<span>Update Package</span>
											</a>
										</li>
											<li>
											<a href="dashboard-securitysettings.html">
												<i class="fa fa-gears"></i>
												<span>Security Settings</span>
											</a>
										</li>
										<li>
											<a href="dashboard-privacy-settings.html">
												<i class="fa fa-eye"></i>
												<span>Privacy Settings</span>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-sign-out"></i>
												<span>Logout</span>
											</a>
										</li>
									</ul>
								</nav>
							</div>
							<div class="tg-widgetdashboard">
								<div class="tg-dashboardnotification tg-pkgexpirey"><span>13 days</span>silver package Expire in</div>
							</div>
							<div class="tg-widgetdashboard">
								<div class="tg-banneradd">
									<figure><a href="#"><img src="images/placeholder/img-01.jpg" alt="image description"></a></figure>
								</div>
							</div>
						</div>
