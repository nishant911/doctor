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
<title>Medlink Directory A Complete Learning Source : Dashboard Profile Setting</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include('../script.php'); ?>

	<script type="text/javascript">
		$(document).ready(function (e) {
    $('#upload_pic').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: 'action/upload_image_action.php',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
            	$("#upload_pic")[0].reset();
            	location.reload();
                console.log("success");
                console.log(data);
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }));
});
	</script>
	<script type="text/javascript">
		$(document).ready(function (e) {
    $('#specialization').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: 'action/specialization_action.php',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
            	$("#specialization")[0].reset();
            	location.reload();
                console.log("success");
                console.log(data);
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }));
});
	</script>
	<script type="text/javascript">
		$(document).ready(function (e) {
    $('#experience').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: 'action/experience_action.php',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
            	$("#experience")[0].reset();
            	location.reload();
                console.log("success");
                console.log(data);
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }));
});
	</script>
<script type="text/javascript">
		$(document).ready(function (e) {
    $('#education').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: 'action/education_action.php',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
            	$("#education")[0].reset();
            	location.reload();
                console.log("success");
                console.log(data);
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }));
});
</script>
<script type="text/javascript">
		$(document).ready(function (e) {
    $('#language').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: 'action/languages_action.php',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
            	$("#language")[0].reset();
            	location.reload();
                console.log("success");
                console.log(data);
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }));
});
	</script>
<script type="text/javascript">
		$(document).ready(function (e) {
    $('#awards').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: 'action/awards_action.php',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
            	$("#awards")[0].reset();
            	location.reload();
                console.log("success");
                console.log(data);
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }));
});
	</script>
<script type="text/javascript">
		$(document).ready(function (e) {
    $('#membership').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: 'action/membership_action.php',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
            	$("#membership")[0].reset();
            	location.reload();
                console.log("success");
                console.log(data);
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }));
});
	</script>	
<script type="text/javascript">
		$(document).ready(function (e) {
    $('#registration').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: 'action/registration_action.php',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
            	$("#registration")[0].reset();
            	location.reload();
                console.log("success");
                console.log(data);
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }));
});
	</script>		
<script type="text/javascript">
        $(document).ready(function (e) {
    $('#services_action').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: 'action/services_action.php',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $("#services_action")[0].reset();
                location.reload();
                console.log("success");
                console.log(data);
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }));
});
    </script>    
<script type="text/javascript">
        $(document).ready(function (e) {
    $('#brochures').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: 'action/brochures_action.php',
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                $("#brochures")[0].reset();
                location.reload();
                console.log("success");
                console.log(data);
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
    }));
});
</script>
<script type="text/javascript">
    document.addEventListener('contextmenu', event => event.preventDefault());
</script>   
<!-- <script language="JavaScript">
  
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
</script> -->
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
						<div class="tg-dashboardtabs">
							<ul class="tg-dashboardtabnav" role="tablist">
								<li role="presentation" class="active"> <a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Overview</a> </li>
								<li role="presentation"> <a href="#services" aria-controls="services" role="tab" data-toggle="tab">Services</a> </li>
								<li role="presentation"> <a href="#addphotos" aria-controls="addphotos" role="tab" data-toggle="tab">Add Photos</a> </li>
								<li role="presentation"> <a href="#addbrochures" aria-controls="addbrochures" role="tab" data-toggle="tab">Add Brochures</a> </li>
							</ul>

	<form method="post" enctype="multipart/form-data" action="action/doctors_profile_update_action.php" >		
	<?php
						$con = OpenCon();
						$query_details = "select * from doctors where username='$_SESSION[username]'";
						$result_details = mysqli_query($con, $query_details);
						$row_details = mysqli_fetch_array($result_details);
						$subcategory = explode(",",$row_details['subcategory']);
						
						/*if (!$result) {
							printf("Error: %s\n", mysqli_error($con));
							exit();
							}*/
						
						mysqli_close($con)
						

					?>	
					
							<div class="tab-content tg-dashboardtabcontent">
								<div role="tabpanel" class="tab-pane active" id="overview">
									<div class="tg-searchbulder tg-searchprofilesttings">
										<div id="tg-categoryslider" class="tg-categoryslider tg-category"> <span data-id="doctorscategory" class="item tg-radio">
											<input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
											<input type="radio" id="doctors" name="maincategory" value="<?php echo $row_details['maincategory']; ?>" checked="">
											<label for="doctors"> <span><img src="images/icons/icon-08.png" alt="image description"></span> <span>Doctors</span> </label>
											</span> <span data-id="hospitalscategory" class="item tg-radio">
											</span> </div>
										<div id="tg-subcategories" class="tg-subcategories tg-subcategories-two">
											<div id="doctorscategory" class="tg-tabcontent tg-active"> 
												<span class="tg-checkbox tg-subcategorycheckbox">
												<input <?php if(in_array("Dentist",$subcategory)){echo "checked";}?> type="checkbox" id="dentist" name="subcategory[]" value="Dentist">
												<label for="dentist"> <span><img src="images/icons/icon-16.png" alt="image description"></span> <span>Dentist</span> </label>
												</span> 
												<span class="tg-checkbox tg-subcategorycheckbox">
												<input <?php if(in_array("Ear-Nose-Throat (ENT)",$subcategory)){echo "checked";}?> type="checkbox" id="ent" name="subcategory[]" value="Ear-Nose-Throat (ENT)">
												<label for="ent"> <span><img src="images/icons/icon-17.png" alt="image description"></span> <span>Ear-Nose-Throat (ENT)</span> </label>
												</span> 
												<span class="tg-checkbox tg-subcategorycheckbox">
												<input <?php if(in_array("Gastroenterologist",$subcategory)){echo "checked";}?> type="checkbox" id="gastroenterologist" name="subcategory[]" value="Gastroenterologist">
												<label for="gastroenterologist"> <span><img src="images/icons/icon-18.png" alt="image description"></span> <span>Gastroenterologist</span> </label>
												</span> 
												<span class="tg-checkbox tg-subcategorycheckbox">
												<input <?php if(in_array("Psychiatrist",$subcategory)){echo "checked";}?> type="checkbox" id="psychiatrist" name="subcategory[]" value="Psychiatrist">
												<label for="psychiatrist"> <span><img src="images/icons/icon-19.png" alt="image description"></span> <span>Psychiatrist</span> </label>
												</span> 
												<span class="tg-checkbox tg-subcategorycheckbox">
												<input <?php if(in_array("Urologist",$subcategory)){echo "checked";}?> type="checkbox" id="urologist" name="subcategory[]"  value="Urologist">
												<label for="urologist"> <span><img src="images/icons/icon-20.png" alt="image description"></span> <span>Urologist</span> </label>
												</span>
												 <span class="tg-checkbox tg-subcategorycheckbox">
												<input <?php if(in_array("Homeopath",$subcategory)){echo "checked";}?> type="checkbox" id="homeopath" name="subcategory[]" value="Homeopath">
												<label for="homeopath"> <span><img src="images/icons/icon-21.png" alt="image description"></span> <span>Homeopath</span> </label>
												</span>
												 <span class="tg-checkbox tg-subcategorycheckbox">
												<input <?php if(in_array("Ophthalmologist",$subcategory)){echo "checked";}?> type="checkbox" id="ophthalmologist" name="subcategory[]" value="Ophthalmologist">
												<label for="ophthalmologist"> <span><img src="images/icons/icon-22.png" alt="image description"></span> <span>Ophthalmologist</span> </label>
												</span>
												 <span class="tg-checkbox tg-subcategorycheckbox">
												<input <?php if(in_array("Ayurveda",$subcategory)){echo "checked";}?> type="checkbox" id="ayurveda" name="subcategory[]" value="Ayurveda">
												<label for="ayurveda"> <span><img src="images/icons/icon-23.png" alt="image description"></span> <span>Ayurveda</span> </label>
												</span>
												 <span class="tg-checkbox tg-subcategorycheckbox">
												<input <?php if(in_array("Dermatologist",$subcategory)){echo "checked";}?> type="checkbox" id="dermatologist" name="subcategory[]" value="Dermatologist">
												<label for="dermatologist"> <span><img src="images/icons/icon-24.png" alt="image description"></span> <span>Dermatologist</span> </label>
												</span>
												 <span class="tg-checkbox tg-subcategorycheckbox">
												<input <?php if(in_array("Neurologist",$subcategory)){echo "checked";}?> type="checkbox" id="neurologist" name="subcategory[]" value="Neurologist">
												<label for="neurologist"> <span><img src="images/icons/icon-25.png" alt="image description"></span> <span>Neurologist</span> </label>
												</span>
												 </div>
											
										</div>
									</div>
									<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Basic Information</h2>
										</div>


					

										<div class="tg-box tg-basicinformation">
											<div class="row tg-rowmargin">
												<div class="col-md-4 col-sm-12 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="title" class="form-control" value="<?php echo $row_details['title']; ?>" placeholder="Title" readonly="">
													</div>
												</div>
												<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="firstname" class="form-control" value="<?php echo $row_details['firstname']; ?>" placeholder="First Name" readonly="">
													</div>
												</div>
												<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="lastname" class="form-control" value="<?php echo $row_details['lastname']; ?>" placeholder="Last Name" readonly="">
													</div>
												</div>
												<div class="col-sm-12 col-xs-12 tg-columnpadding">
													<input type="text" name="subtitle" value="<?php echo $row_details['subtitle']; ?>" class="form-control" placeholder="Sub Title (MDS - Paedodontics &amp; Preventive Dentistry)">
												</div>
											</div>
										</div>
									</div>
									<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Profile Photo</h2>
										</div>
					<form method="post" id="upload_pic" enctype="multipart/form-data" action="" >					
										<div class="tg-box tg-profilephoto">
											<div class="row tg-rowmargin">
												<div class="col-md-8 col-sm-12 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="file" name="profile_pic" class="form-control" placeholder="">
														<input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
													</div>
												</div>
												<div class="col-md-2 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<button class="tg-btn tg-btn-lg" type="submit">upload</button>
													</div>
												</div>
												
											</div>
										</div>
					</form>					
										<div class="tg-dashboardboxtitle">
											<h2>Uploaded Photos</h2>
										</div>
			
										<div class="tg-box tg-uploadedphotos">
											<ul class="tg-uploadedimggallery">
							<?php
                                    $con = OpenCon();
                                    $query = "select * from profile_pic where username='$_SESSION[username]'";

                                    $result = mysqli_query($con,$query);
									mysqli_close($con);
                                    while($row = mysqli_fetch_array($result)){
                                    
                                ?>
												<li>
													<div class="tg-galleryimg">
														<figure> <img src="uploads/<?php echo $row['profile_pic']; ?>" alt="image description">
															<!-- <figcaption><i class="fa fa-close"></i></figcaption> -->
														</figure>
														<span class="tg-filename"> <?php echo $row['profile_pic']; ?> </span> </div>
												</li>
									<?php } ?>			
											</ul>
										</div>
									
									</div>
										
									<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Social Information</h2>
										</div>
										<div class="tg-box tg-socialinformation">
											<div class="row tg-rowmargin">
												<div class="col-sm-12 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup tg-iconinput">
														<input type="text" name="facebook" class="form-control" value="<?php echo $row_details['facebook']; ?>" placeholder="www.facebook/domain.com">
													</div>
												</div>
												<div class="col-sm-12 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup tg-iconinput">
														<input type="text" name="twitter" class="form-control" value="<?php echo $row_details['twitter']; ?>" placeholder="www.twitter/domain.com">
													</div>
												</div>
												<div class="col-sm-12 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup tg-iconinput">
														<input type="text" name="linkedin" class="form-control" value="<?php echo $row_details['linkedin']; ?>" placeholder="www.linkedin/domain.com">
													</div>
												</div>
												<div class="col-sm-12 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="google_plus" class="form-control" value="<?php echo $row_details['google_plus']; ?>" placeholder="Enter Google+ Link Here">
													</div>
												</div>
												<div class="col-sm-12 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="rss_link" class="form-control" value="<?php echo $row_details['rss_link']; ?>" placeholder="Enter Rss Link Here">
													</div>
												</div>
												<div class="col-sm-12 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup tg-iconinput">
														<input type="text" name="youtube" class="form-control" value="<?php echo $row_details['youtube']; ?>" placeholder="www.youtube/domain.com">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Specializations</h2>
										</div>
										<div class="tg-box tg-specializations tg-uiicons">
				<form id="specialization" method="post" enctype="multipart/form-data" action="specialization_action.php" >					
											<div class="row tg-rowmargin">
												<div class="col-md-10 col-sm-9 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup"> <span class="tg-select">
														<select name="specialization">
															<option value="" selected="selected">Select Specialization</option>
															<option value="Specializations 1">Specializations 1</option>
															<option value="Specializations 2">Specializations 2</option>
															<option value="Specializations 3">Specializations 3</option>
														</select>
														<input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
														</span> </div>
												</div>
												<div class="col-md-2 col-sm-3 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<button class="tg-btn tg-btn-lg" type="submit">add now</button>
													</div>
												</div>
											</div>

						</form>
											<ul class="tg-threecolumns tg-liststyledot">
						<?php
                                    $con = OpenCon();
                                    $query = "select * from doctor_specialization where username='$_SESSION[username]'";

                                    $result = mysqli_query($con,$query);
									mysqli_close($con);
                                    while($row = mysqli_fetch_array($result)){
                                    
                        ?>
												<li> <span><?php echo $row['specialization']; ?></span> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>

						<?php } ?>						
												
											</ul>
										</div>
									</div>
									<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Experience</h2>
										</div>
										<div class="tg-box tg-experience tg-uiicons">
				<form id="experience" method="post" enctype="multipart/form-data" action="" >							
											<div class="row tg-rowmargin">
												<div class="col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="designation" class="form-control" placeholder="Designation">
														<input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
													</div>
												</div>
												<div class="col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="company" class="form-control" placeholder="Company Name">
													</div>
												</div>
												<div class="col-sm-5 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<span class="tg-inputicon tg-calendaricon">
														<input type="text" name="starting_date" class="form-control tg-datepicker" placeholder="Starting Date">
													</span>
													</div>
												</div>
												<div class="col-sm-5 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<span class="tg-inputicon tg-calendaricon">
														<input type="text" name="ending_date" class="form-control tg-datepicker" placeholder="Ending Date or Present">
													</span>
													</div>
												</div>
												<div class="col-sm-2 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<button class="tg-btn tg-btn-lg" type="submit">Add Now</button>
													</div>
												</div>
											</div>

					</form>						
											<ul class="tg-themelist tg-liststyledot tg-listdatastyle">
					<?php
                                    $con = OpenCon();
                                    $query = "select * from doctors_experience where username='$_SESSION[username]'";

                                    $result = mysqli_query($con,$query);
									mysqli_close($con);
                                    while($row = mysqli_fetch_array($result)){
                                    
                        ?>							
												<li> <span><?php echo $row['designation']; ?></span> <span><?php echo $row['company']; ?></span> <span><?php echo $row['starting_date'] . ' - ' . $row['ending_date']; ?></span> </li>

						<?php } ?>
											</ul>
										</div>
									</div>
									<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Education</h2>
										</div>
										<div class="tg-box tg-education tg-uiicons">
				<form id="education" method="post" enctype="multipart/form-data" action="" >							
											<div class="row tg-rowmargin">
												<div class="col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="degree_name" class="form-control" placeholder="Degree Name">
														<input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
													</div>
												</div>
												<div class="col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="college_name" class="form-control" placeholder="College/University Name">
													</div>
												</div>
												<div class="col-sm-5 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<span class="tg-inputicon tg-calendaricon">
														<input type="text" name="starting_date" class="form-control tg-datepicker" placeholder="Starting Date">
													</span>
													</div>
												</div>
												<div class="col-sm-5 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup"><span class="tg-inputicon tg-calendaricon">
														<input type="text" name="ending_date" class="form-control tg-datepicker" placeholder="Ending Date or Present">
													</span>
													</div>
												</div>
												<div class="col-sm-2 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<button class="tg-btn tg-btn-lg" type="submit">Add Now</button>
													</div>
												</div>
											</div>
				</form>							
											<ul class="tg-themelist tg-liststyledot tg-listdatastyle">
				<?php
                                    $con = OpenCon();
                                    $query = "select * from doctors_education where username='$_SESSION[username]'";

                                    $result = mysqli_query($con,$query);
									mysqli_close($con);
                                    while($row = mysqli_fetch_array($result)){
                                    
                        ?>										
												<li> <span><?php echo $row['degree_name']; ?></span> <span><?php echo $row['college_name']; ?></span> <span><?php echo $row['starting_date'] . ' - ' . $row['ending_date']; ?></span> </li>

						<?php } ?>						
											</ul>
										</div>
									</div>
									<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Languages</h2>
										</div>
										<div class="tg-box tg-languages tg-uiicons">
				<form id="language" method="post" enctype="multipart/form-data" action="" >							
											<div class="row tg-rowmargin">
												<div class="col-md-10 col-sm-9 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup"> <span class="tg-select">
														<select name="languages">
															<option value="" selected="selected">Select Languages</option>
															<option value="English">English</option>
															<option value="Hindi">Hindi</option>
														</select>
														<input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
														</span> </div>
												</div>
												<div class="col-md-2 col-sm-3 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<button class="tg-btn tg-btn-lg" type="submit">add now</button>
													</div>
												</div>
											</div>
				</form>							
											<ul class="tg-threecolumns tg-liststyledot">
				<?php
                                    $con = OpenCon();
                                    $query = "select * from doctors_languages where username='$_SESSION[username]'";

                                    $result = mysqli_query($con,$query);
									mysqli_close($con);
                                    while($row = mysqli_fetch_array($result)){
                                    
                        ?>									
												<li> <span><?php echo $row['languages']; ?></span> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
						<?php } ?>						
											</ul>
										</div>
									</div>
									<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Awards &amp; Recognitions</h2>
										</div>
										<div class="tg-box tg-uiicons">
											<div class="row tg-rowmargin">

				<form id="awards" method="post" enctype="multipart/form-data" action="" >								
												<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="awards_title" class="form-control" placeholder="Awards and Recognitions Title">
														<input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
													</div>
												</div>
												<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group	 tg-formgroup">
														<input type="text" name="occasion" class="form-control" placeholder="Occasion">
													</div>
												</div>
												<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup"><span class="tg-inputicon tg-calendaricon">
														<input type="text" name="date" class="form-control tg-datepicker" placeholder="Date">
													</span>
													</div>
												</div>
												<div class="col-md-2 col-sm-3 col-xs-12 pull-right tg-columnpadding">
													<div class="form-group tg-formgroup">
														<button class="tg-btn tg-btn-lg" type="submit">add now</button>
													</div>
												</div>
							</form>					
											</div>
											<ul class="tg-themelist tg-liststyledot tg-listdatastyle">
				<?php
                                    $con = OpenCon();
                                    $query = "select * from doctors_awards where username='$_SESSION[username]'";

                                    $result = mysqli_query($con,$query);
									mysqli_close($con);
                                    while($row = mysqli_fetch_array($result)){
                                    
                        ?>								
												<li> <span> <em><?php echo $row['awards_title']; ?></em> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </span> <span><?php echo $row['occasion']; ?></span> <span><?php echo $row['date']; ?></span> </li>
						<?php  } ?>						
											</ul>
										</div>
									</div>
									<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Memberships</h2>
										</div>
										<div class="tg-box tg-memberships tg-uiicons">
											<div class="row tg-rowmargin">

				<form id="membership" method="post" enctype="multipart/form-data" action="" >		
												<div class="col-md-4 col-sm-12 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup"> <input type="text" name="membership_title" class="form-control" placeholder="Memberships Title">
														<input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
													 </div>
												</div>
												<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup"> <span class="tg-inputicon tg-geolocationicon">
														<input type="text" name="location" class="form-control" placeholder="Location">
														</span> </div>
												</div>
												<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup"> <span class="tg-inputicon tg-calendaricon">
														<input type="text" name="date" class="form-control tg-datepicker" placeholder="Date">
														</span> </div>
												</div>
												<div class="col-md-2 col-sm-3 col-xs-12 pull-right tg-columnpadding">
													<div class="form-group tg-formgroup">
														<button class="tg-btn tg-btn-lg" type="submit">add now</button>
													</div>
												</div>
					</form>
											</div>
											<ul class="tg-themelist tg-liststyledot tg-listdatastyle">
					<?php
                                    $con = OpenCon();
                                    $query = "select * from doctors_membership where username='$_SESSION[username]'";

                                    $result = mysqli_query($con,$query);
									mysqli_close($con);
                                    while($row = mysqli_fetch_array($result)){
                                    
                        ?>								
												<li> <span> <em><?php echo $row['membership_title']; ?></em> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </span> <span><?php echo $row['location']; ?></span> <span><?php echo $row['date']; ?></span> </li>
						<?php } ?>						
											</ul>
										</div>
									</div>
									<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Registrations</h2>
										</div>
										<div class="tg-box tg-registrations tg-uiicons">
											<div class="row tg-rowmargin">
				<form id="registration" method="post" enctype="multipart/form-data" action="" >								
												<div class="col-md-4 col-sm-12 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup"> <input type="text" name="registration_id" class="form-control" placeholder="Registration ID">
														<input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>"> </div>
												</div>
												<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup"> <span class="tg-inputicon tg-geolocationicon">
														<input type="text" name="location" class="form-control" placeholder="Location">
														</span> </div>
												</div>
												<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup"> <span class="tg-inputicon tg-calendaricon">
														<input type="text" name="date" class="form-control tg-datepicker" placeholder="Date">
														</span> </div>
												</div>
												<div class="col-md-2 col-sm-3 col-xs-12 pull-right tg-columnpadding">
													<div class="form-group tg-formgroup">
														<button class="tg-btn tg-btn-lg" type="submit">add now</button>
													</div>
												</div>
				</form>								
											</div>
											<ul class="tg-themelist tg-liststyledot tg-listdatastyle">
				<?php
                                    $con = OpenCon();
                                    $query = "select * from doctors_registration where username='$_SESSION[username]'";

                                    $result = mysqli_query($con,$query);
									mysqli_close($con);
                                    while($row = mysqli_fetch_array($result)){
                                    
                        ?>								
												<li> <span> <em><?php echo $row['registration_id']; ?></em> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </span> <span><?php echo $row['location']; ?></span> <span><?php echo $row['date']; ?></span> </li>
					<?php } ?>							
											</ul>
										</div>
									</div>
									<!-- <div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Accepted Insurance</h2>
										</div>
										<div class="tg-box tg-acceptedinsurance tg-uiicons">
											<div class="row tg-rowmargin">
												<div class="col-md-10 col-sm-9 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup"> <span class="tg-select">
														<select>
															<option>Select/Type Specializations</option>
															<option>Select/Type Specializations</option>
															<option>Select/Type Specializations</option>
														</select>
														</span> </div>
												</div>
												<div class="col-md-2 col-sm-3 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<button class="tg-btn tg-btn-lg" type="submit">add now</button>
													</div>
												</div>
											</div>
											<ul class="tg-threecolumns tg-liststyledot">
												<li> <span>Consectetur adipisicing</span> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
												<li> <span>Tempor incididunt </span> <i class="fa fa-exclamation-circle tg-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="write your note here"></i> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
												<li> <span>Commodo consequat</span> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
												<li> <span>Eiusmod tempor iidunt</span> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
												<li> <span>Dolore magna aliqua</span> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
												<li> <span>Duis aute irureation</span> <i class="fa fa-exclamation-circle tg-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="write your note here"></i> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
												<li> <span>Laborei dolore magna</span> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
											</ul>
										</div>
									</div> -->
								<!-- 	<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Video Introduction/Interview</h2>
										</div>
										<div class="tg-box tg-videointerview tg-uiicons">
											<div class="row tg-rowmargin">
												<div class="col-md-10 col-sm-9 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="videolink" class="form-control" placeholder="Enter URL Here">
													</div>
												</div>
												<div class="col-md-2 col-sm-3 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<button class="tg-btn tg-btn-lg" type="submit">add now</button>
													</div>
												</div>
											</div>
											<ul class="tg-themelist tg-liststyledot tg-listdatastyle">
												<li> <em>www.youtube.com/YjY1laQ0jkZife9aaTeSETvKls</em> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
												<li> <em>www.youtube.com/ZSWCHmhEZCOQrdf9BD40BMSj2l</em> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
												<li> <em>www.youtube.com/Nk3rHqssya5ib6HU7RLn2LWjXxngl8QIh0vCmvGQ</em> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </li>
											</ul>
										</div>
									</div> -->
									<div class="tg-updateall"> <span class="tg-note">* Click <strong>update all changes</strong> to update latest added detail (s).</span>
										<button class="tg-btn" type="submit">update now</button>
									</div>
								</div>
				</form>
								<div role="tabpanel" class="tab-pane" id="services">
									<div class="tg-dashboardbox tg-profilesettings">
										<div class="tg-dashboardboxtitle">
											<h2>Services</h2>
										</div>
										<div class="tg-box tg-dashboardservices tg-uiicons">
											<div class="row tg-rowmargin">
                    <form id="services_action" method="post" enctype="multipart/form-data" action="" >                            
												<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup"> <span class="tg-select">
														<select name="category">
                                                            <option value="">Select Category</option>
															<option value="Category 1">Category 1</option>
															<option value="Category 2">Category 2</option>
															<option value="Category 3">Category 3</option>
														</select>
                                                        <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
														</span> </div>
												</div>
												<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup"> <span class="tg-select">
														<select name="sub_category">
                                                            <option value="">Select Sub-Category</option>
															<option value="Sub Category 1">Sub Category 1</option>
															<option value="Sub Category 2">Sub Category 2</option>
															<option value="Sub Category 3">Sub Category 3</option>
														</select>
														</span> </div>
												</div>
												<div class="col-md-4 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="text" name="fees" class="form-control" placeholder="Enter Fee Per Patient">
													</div>
												</div>
												<div class="col-md-2 col-sm-6 col-xs-12 pull-right tg-columnpadding">
													<button class="tg-btn tg-btn-lg" type="submit">add now</button>
												</div>
                    </form>                            
											</div>
											<div class="tg-dashboardboxtitle tg-margin">
												<h2>Services</h2>
											</div>
											<div class="tg-dashboardboxtitle tg-feetitle tg-margin">
												<h2>Fee Per Patient</h2>
											</div>
											<div class="tg-servicesbox">

                <?php
                                            $con = OpenCon();
                                            $query_category = "select DISTINCT category from doctors_services where username='$_SESSION[username]'";
                                            $result_category = mysqli_query($con, $query_category);
                                            
                                            mysqli_close($con);
                                            $num_category = mysqli_num_rows($result_category);
                                            for ($i=0; $i < $num_category; $i++) { 
                                                $row_category = mysqli_fetch_array($result_category);

                 ?>
												<div class="tg-servicesholder">
													<div class="tg-mainservice"> <em><?php echo $row_category['category']; ?></em> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> </div>
													<ul class="tg-themelist tg-liststyledot tg-listdatastyle tg-childservices">

                            <?php
                                $con = OpenCon();
                                $query_sub_category =  "select * from doctors_services where category='$row_category[category]'";
                                $result_sub_category = mysqli_query($con, $query_sub_category);
                                
                                mysqli_close($con);
                                while ( $row_sub_category = mysqli_fetch_array($result_sub_category) )
                                 {
                          ?>                            
														<li> <em><?php echo $row_sub_category['sub_category']; ?></em> <i class="fa fa-pencil"></i> <i class="fa fa-close"></i> <span>&#x20b9;    <?php echo $row_sub_category['fees']; ?></span> </li>

                                <?php } ?>                        
													</ul>
												</div>
                                <?php } ?>                

											</div>
										</div>
									</div>
									<!-- <div class="tg-updateall"> <span class="tg-note">* Click <strong>update all changes</strong> to update latest added detail (s).</span>
										<button class="tg-btn" type="submit">update now</button>
									</div> -->
								</div>
								<div role="tabpanel" class="tab-pane" id="addphotos">
									<div class="tg-dashboardbox">
            <form method="post" id="upload_pic" enctype="multipart/form-data" action="" >                            
										<div class="tg-dashboardboxtitle">
											<h2>Add Photos</h2>
										</div>
										<div class="tg-box tg-profilephoto">
											<div class="row tg-rowmargin">
												<div class="col-md-8 col-sm-12 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="file" name="profile_pic" class="form-control" placeholder="">
                                                        <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
													</div>
												</div>
												
												<div class="col-md-2 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<button class="tg-btn tg-btn-lg" type="submit">upload</button>
													</div>
												</div>
											</div>
										</div>
            </form>                            
										<div class="tg-dashboardboxtitle">
											<h2>Uploaded Photos</h2>
										</div>
										<div class="tg-box tg-uploadedphotos">
											<ul class="tg-uploadedimggallery">
            <?php
                                    $con = OpenCon();
                                    $query = "select * from profile_pic where username='$_SESSION[username]'";

                                    $result = mysqli_query($con,$query);
                                    mysqli_close($con);
                                    while($row = mysqli_fetch_array($result)){
                                    
                                ?>
                                                <li>
                                                    <div class="tg-galleryimg">
                                                        <figure> <img src="uploads/<?php echo $row['profile_pic']; ?>" alt="image description">
                                                            <!-- <figcaption><i class="fa fa-close"></i></figcaption> -->
                                                        </figure>
                                                        <span class="tg-filename"> <?php echo $row['profile_pic']; ?> </span> </div>
                                                </li>
                                    <?php } ?>                                      
												
											</ul>
										</div>
									</div>
									<!-- <div class="tg-updateall"> <span class="tg-note">* Click <strong>update all changes</strong> to update latest added detail (s).</span>
										<button class="tg-btn" type="submit">update now</button>
									</div> -->
								</div>
								<div role="tabpanel" class="tab-pane" id="addbrochures">
									<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Add Brochures</h2>
										</div>
										<div class="tg-box tg-profilephoto">
            <form method="post" id="brochures" enctype="multipart/form-data" action="" >                                
											<div class="row tg-rowmargin">
												<div class="col-md-8 col-sm-12 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<input type="file" name="brochures" class="form-control" placeholder="">
                                                        <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
													</div>
												</div>
												<div class="col-md-2 col-sm-6 col-xs-12 tg-columnpadding">
													
												</div>
												<div class="col-md-2 col-sm-6 col-xs-12 tg-columnpadding">
													<div class="form-group tg-formgroup">
														<button class="tg-btn tg-btn-lg" type="submit">upload</button>
													</div>
												</div>
											</div>
                </form>                            
										</div>
										<div class="tg-dashboardboxtitle">
											<h2>Uploaded Brochures</h2>
										</div>
										<div class="tg-box tg-uploadedphotos">
											<ul class="tg-uploadedimggallery">
             <?php
                                    $con = OpenCon();
                                    $query = "select * from doctors_brochures where username='$_SESSION[username]'";

                                    $result = mysqli_query($con,$query);
                                    mysqli_close($con);
                                    while($row = mysqli_fetch_array($result)){
                                    
                                ?>                                    
												<li>
													<div class="tg-galleryimg">
													<a href="uploads/<?php echo $row['brochures']; ?>"> Click Here.. to Download </a>
                                                        
														<span class="tg-filename"><?php echo $row['brochures']; ?></span> </div>
												</li>
			<?php } ?>									
											</ul>
										</div>
									</div>
									<!-- <div class="tg-updateall"> <span class="tg-note">* Click <strong>update all changes</strong> to update latest added detail (s).</span>
										<button class="tg-btn" type="submit">update now</button>
									</div> -->
								</div>
							</div>
						</div>
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
	<?php include('footer_doctor.php'); ?> 
</div>
<!--************************************
			Wrapper End
	*************************************--> 

</body>

<!-- Mirrored from exprostudio.com/html/medlink/dashboard-profilesetting.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 11:33:19 GMT -->
</html>