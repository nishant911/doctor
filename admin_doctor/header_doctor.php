<script language="JavaScript">
  
  window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
    document.addEventListener("keydown", function(e) {
    //document.onkeydown = function(e) {
      // "I" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        disabledEvent(e);
      }
      // "J" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        disabledEvent(e);
      }
      // "S" key + macOS
      if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
        disabledEvent(e);
      }
      // "U" key
      if (e.ctrlKey && e.keyCode == 85) {
        disabledEvent(e);
      }
      // "F12" key
      if (event.keyCode == 123) {
        disabledEvent(e);
      }
    }, false);
    function disabledEvent(e){
      if (e.stopPropagation){
        e.stopPropagation();
      } else if (window.event){
        window.event.cancelBubble = true;
      }
      e.preventDefault();
      return false;
    }
  };
</script>
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="tg-topbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12">
							<span class="tg-quickadvice">Get a Quick Advice: <strong>(+4) 1234 5667 - 9</strong></span>
							<ul class="tg-contactinfo">
								<li><a href="#">info@domain.com</a></li>
								<li><a class="tg-btn" href="signin-signup.php">SighIn/SignUp</a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<strong class="tg-logo">
							<a href="index-2.html"><img src="images/logo.png" alt="image description"></a>
						</strong>
						<div class="tg-navigationarea">
							<nav id="tg-nav" class="tg-nav">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div id="tg-navigation" class="tg-navigation collapse navbar-collapse">
									<ul>
										<li class="tg-hasdropdown">
											<a href="#">Categories</a>
											<ul class="tg-dropdownmenu">
												<li><a href="searchresult-v1.html">Doctors</a></li>
												<li><a href="searchresult-v2.html">Hospitals</a></li>
												<li><a href="searchresult-v3.html">Spas</a></li>
												<li><a href="searchresult-v1.html">Pharmacies</a></li>
												<li><a href="searchresult-v2.html">Labs</a></li>
												<li><a href="searchresult-v3.html">Fitness</a></li>
												<li><a href="searchresult-v1.html">Clinics</a></li>
											</ul>
										</li>
										<li><a href="aboutus.html">About</a></li>
										<li><a href="how-its-works.html">How It Works?</a></li>
										<li class="tg-hasdropdown">
											<a href="javascript:void(0);">
												<i class="hidden-xs fa fa-navicon"></i>
												<span class="hidden-lg hidden-md hidden-sm">Pages</span>
											</a>
											<ul class="tg-dropdownmenu">
												<li><a href="blogpostlist.html">Blog List</a></li>
												<li><a href="blogpostgrid.html">Blog Grid</a></li>
												<li><a href="blogpostdetail.html">Blog Detail</a></li>
												<li><a href="doctor-overview-detail.html">Doctor Detail</a></li>
												<li><a href="404.html">404</a></li>
												<li><a href="commingsoon.html">Comming Soon</a></li>
												<li><a href="signin-signup.html">Signin-Signup</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</nav>
							<div class="tg-admin">
								<a class="tg-btn" href="#">Become A Member</a>
								<div class="tg-user">
									<div class="tg-dropdown">
										<figure class="tg-adminpic">
											<span class="tg-dashboardbadge">3</span>
											<a href="dashboard.html"><img src="images/icons/icon-41.png" alt="image description"></a>
										</figure>
										<a href="javascript:void(0);" class="tg-usermenu tg-btndropdown">
											<em>howdy, Anjela doe!</em>
										</a>
										<div class="dropdown-menu tg-dropdownbox tg-usermenu">
											<ul>
												<li>
													<a href="dashboard.html">
														<i class="fa fa-line-chart"></i>
														<span>Insights</span>
													</a>
												</li>
												<li>
													<a href="dashboard-badgepopup.html">
														<i class="fa fa-line-chart"></i>
														<span>Insights-Two</span>
													</a>
												</li>
												<li>
													<a href="dashboard-profilesetting.php">
														<i class="fa fa-user"></i>
														<span>Profile settings</span>
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
												<li>
													<a href="dashboard-appointments.html">
														<i class="fa fa-calendar-check-o"></i>
														<span>Appointments</span>
													</a>
												</li>
												<li>
													<a href="dashboard-appoinmentsetting.html">
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
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		