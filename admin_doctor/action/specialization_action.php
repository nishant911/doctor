<?php

	include 'dbconnection.php';
    $con = OpenCon();

    $username = $_POST['username'];
	$specialization = $_POST['specialization'];	
	$created_at = date('Y-m-d H:i:s');

	if(!empty($specialization)){
	
			$query_search = "select * from doctor_specialization where username='$username' and specialization='$specialization'";
			$result_search = mysqli_query($con, $query_search);
			$num_search = mysqli_num_rows($result_search);
			mysqli_close($con);

			if ($num_search == 0) {
				$con = OpenCon();
				$query = "insert into doctor_specialization (username, specialization, created_at )
							values ('$username', '$specialization', '$created_at' ) ";
				$result = mysqli_query($con, $query);
				mysqli_close($con);
				
			}
			
			else{
				echo "<script>javascript: alert('specialization already added')></script>";
			}
}



?>	