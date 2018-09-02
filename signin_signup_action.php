<?php
	 include 'dbconnection.php';
     $con = OpenCon();

	$maincategory = $_POST['maincategory'];
	
	$title = $_POST['title'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$repassword = $_POST['repassword'];
	$notrobot = $_POST['notrobot'];
	
	$created_at = date('Y-m-d H:i:s');
	
	if ($maincategory=="Doctors") {
		$query_doctors = "insert into doctors (maincategory, title, firstname, lastname, username, password, notrobot, created_at )
				values ('$maincategory', '$title', '$firstname', '$lastname', '$username', '$password', '$notrobot', '$created_at' ) ";
		$result_doctors = mysqli_query($con, $query_doctors);

		if($result_doctors){
				echo "Success";
				//header("location:signin_signup.php");
			}
			else{
				echo "Failed";
			}

	}
	if ($maincategory=="Hospitals") {
		$query_hospitals = "insert into hospitals (maincategory, title, firstname, lastname, username, password, notrobot, created_at )
				values ('$maincategory', '$title', '$firstname', '$lastname', '$username', '$password', '$notrobot', '$created_at' ) ";
		$result_hospitals = mysqli_query($con, $query_hospitals);

		if($result_hospitals){
				echo "Success";
				//header("location:signin_signup.php");
			}
			else{
				echo "Failed";
			}

	}
	if ($maincategory=="Spas") {
		$query_spas = "insert into spas (maincategory, title, firstname, lastname, username, password, notrobot, created_at )
				values ('$maincategory', '$title', '$firstname', '$lastname', '$username', '$password', '$notrobot', '$created_at' ) ";
		$result_spas = mysqli_query($con, $query_spas);

		if($result_spas){
				echo "Success";
				//header("location:signin_signup.php");
			}
			else{
				echo "Failed";
			}

	}

	if ($maincategory=="Pharmacies") {
		$query_pharmacies = "insert into pharmacies (maincategory, title, firstname, lastname, username, password, notrobot, created_at )
				values ('$maincategory', '$title', '$firstname', '$lastname', '$username', '$password', '$notrobot', '$created_at' ) ";
		$result_pharmacies = mysqli_query($con, $query_pharmacies);

		if($result_pharmacies){
				echo "Success";
				//header("location:signin_signup.php");
			}
			else{
				echo "Failed";
			}

	}
	if ($maincategory=="Labs") {
		$query_labs = "insert into labs (maincategory, title, firstname, lastname, username, password, notrobot, created_at )
				values ('$maincategory', '$title', '$firstname', '$lastname', '$username', '$password', '$notrobot', '$created_at' ) ";
		$result_labs = mysqli_query($con, $query_labs);

		if($result_labs){
				echo "Success";
				//header("location:signin_signup.php");
			}
			else{
				echo "Failed";
			}

	}
	if ($maincategory=="Fitness") {
		$query_fitness = "insert into fitness (maincategory, title, firstname, lastname, username, password, notrobot, created_at )
				values ('$maincategory', '$title', '$firstname', '$lastname', '$username', '$password', '$notrobot', '$created_at' ) ";
		$result_fitness = mysqli_query($con, $query_fitness);

		if($result_fitness){
				echo "Success";
				//header("location:signin_signup.php");
			}
			else{
				echo "Failed";
			}

	}
	if ($maincategory=="Blood Bank") {
		$query_blood_bank = "insert into blood_bank (maincategory, title, firstname, lastname, username, password, notrobot, created_at )
				values ('$maincategory', '$title', '$firstname', '$lastname', '$username', '$password', '$notrobot', '$created_at' ) ";
		$result_blood_bank = mysqli_query($con, $query_blood_bank);

		if($result_blood_bank){
				echo "Success";
				//header("location:signin_signup.php");
			}
			else{
				echo "Failed";
			}

	}
	if ($maincategory=="Clinics") {
		$query_clinics = "insert into clinics (maincategory, title, firstname, lastname, username, password, notrobot, created_at )
				values ('$maincategory', '$title', '$firstname', '$lastname', '$username', '$password', '$notrobot', '$created_at' ) ";
		$result_clinics = mysqli_query($con, $query_clinics);

		if($result_clinics){
				echo "Success";
				//header("location:signin_signup.php");
			}
			else{
				echo "Failed";
			}

	}
	
	mysqli_close($con);
?>	