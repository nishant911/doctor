<?php

	include 'dbconnection.php';
    $con = OpenCon();

    $username = $_POST['username'];
	$category = $_POST['category'];
	$sub_category = $_POST['sub_category'];
	$fees = $_POST['fees'];
		
	$created_at = date('Y-m-d H:i:s');

	if(!empty($category) || !empty($sub_category)){
	
			
				$query = "insert into doctors_services (username, category, sub_category, fees,  created_at )
							values ('$username', '$category', '$sub_category', '$fees', '$created_at' ) ";
				$result = mysqli_query($con, $query);
				
				mysqli_close($con);
				
			
			
}
else{
				echo "<script>javascript: alert('Services already added')></script>";
			}



?>	