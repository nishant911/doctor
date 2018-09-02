<?php

	include 'dbconnection.php';
    $con = OpenCon();

    $username = $_POST['username'];
	$degree_name = $_POST['degree_name'];
	$college_name = $_POST['college_name'];
	$starting_date = $_POST['starting_date'];
	$ending_date = $_POST['ending_date'];	
	$created_at = date('Y-m-d H:i:s');

	if(!empty($degree_name)){
	
			$query_search = "select * from doctors_education where username='$username' and degree_name='$degree_name' and college_name='$college_name'";
			$result_search = mysqli_query($con, $query_search);

			$num_search = mysqli_num_rows($result_search);
			mysqli_close($con);

			if ($num_search == 0) {
				$con = OpenCon();
				$query = "insert into doctors_education (username, degree_name, college_name, starting_date, ending_date, created_at )
							values ('$username', '$degree_name', '$college_name', '$starting_date', '$ending_date', '$created_at' ) ";
				$result = mysqli_query($con, $query);
				
				mysqli_close($con);
				
			}
			
			else{
				echo "<script>javascript: alert('Education already added')></script>";
			}
}



?>	