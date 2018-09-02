<?php

	include 'dbconnection.php';
    $con = OpenCon();

    $username = $_POST['username'];
	$registration_id = $_POST['registration_id'];
	$location = $_POST['location'];
	$date = $_POST['date'];
		
	$created_at = date('Y-m-d H:i:s');

	if(!empty($registration_id) || !empty($location)){
	
			
				$con = OpenCon();
				$query = "insert into doctors_registration (username, registration_id, location, date,  created_at )
							values ('$username', '$registration_id', '$location', '$date', '$created_at' ) ";
				$result = mysqli_query($con, $query);
				
				mysqli_close($con);
				
			
			
}
else{
				echo "<script>javascript: alert('Awards already added')></script>";
			}



?>	