<?php

	include 'dbconnection.php';
    $con = OpenCon();

    $username = $_POST['username'];
	$designation = $_POST['designation'];
	$company = $_POST['company'];
	$starting_date = $_POST['starting_date'];
	$ending_date = $_POST['ending_date'];	
	$created_at = date('Y-m-d H:i:s');

	if(!empty($designation)){
	
			$query_search = "select * from doctors_experience where username='$username' and designation='$designation' and company='$company'";
			$result_search = mysqli_query($con, $query_search);
			$num_search = mysqli_num_rows($result_search);
			mysqli_close($con);

			if ($num_search == 0) {
				$con = OpenCon();
				$query = "insert into doctors_experience (username, designation, company, starting_date, ending_date, created_at )
							values ('$username', '$designation', '$company', '$starting_date', '$ending_date', '$created_at' ) ";
				$result = mysqli_query($con, $query);
				mysqli_close($con);
				
			}
			
			else{
				echo "<script>javascript: alert('Experience already added')></script>";
			}
}



?>	