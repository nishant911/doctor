<?php

	include 'dbconnection.php';
    $con = OpenCon();

    $username = $_POST['username'];
	$membership_title = $_POST['membership_title'];
	$location = $_POST['location'];
	$date = $_POST['date'];
		
	$created_at = date('Y-m-d H:i:s');

	if(!empty($membership_title) || !empty($location)){
	
			
				$query = "insert into doctors_membership (username, membership_title, location, date,  created_at )
							values ('$username', '$membership_title', '$location', '$date', '$created_at' ) ";
				$result = mysqli_query($con, $query);
				
				mysqli_close($con);
				
			
			
}
else{
				echo "<script>javascript: alert('Awards already added')></script>";
			}



?>	