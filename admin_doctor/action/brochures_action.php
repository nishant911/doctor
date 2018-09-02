<?php

	include 'dbconnection.php';
    $con = OpenCon();


	$username = $_POST['username'];	
	/*echo $username;
	die();*/

	$brochures = $_FILES['brochures']['name'];
	$temp = $_FILES['brochures']['tmp_name'];
	$locator = "../uploads/".$brochures;

	$created_at = date('Y-m-d H:i:s');

	if(!empty($brochures)){
	

	$query = "insert into doctors_brochures (username, brochures, created_at )
				values ('$username', '$brochures', '$created_at' ) ";
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