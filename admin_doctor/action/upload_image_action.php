<?php

	include 'dbconnection.php';
    $con = OpenCon();


	$username = $_POST['username'];	
	/*echo $username;
	die();*/

	$profile_pic = $_FILES['profile_pic']['name'];
	$temp = $_FILES['profile_pic']['tmp_name'];
	$locator = "../uploads/".$profile_pic;

	$created_at = date('Y-m-d H:i:s');

	if(!empty($profile_pic)){
	

	$query = "insert into profile_pic (username, profile_pic, created_at )
				values ('$username', '$profile_pic', '$created_at' ) ";
	$result = mysqli_query($con, $query);
	move_uploaded_file($temp,$locator);
	mysqli_close($con);
	if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
			exit();
		}
		
	if($result){
		header("location:../dashboard-profilesetting.php");
	}

}



?>	