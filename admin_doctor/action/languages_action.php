<?php

	include 'dbconnection.php';
    $con = OpenCon();

    $username = $_POST['username'];
	$languages = $_POST['languages'];
		
	$created_at = date('Y-m-d H:i:s');

	if(!empty($languages)){
	
			$query_search = "select * from doctors_languages where username='$username' and languages='$languages'";
			$result_search = mysqli_query($con, $query_search);

			$num_search = mysqli_num_rows($result_search);
			mysqli_close($con);

			if ($num_search == 0) {
				$con = OpenCon();
				$query = "insert into doctors_languages (username, languages, created_at )
							values ('$username', '$languages', '$created_at' ) ";
				$result = mysqli_query($con, $query);
				
				mysqli_close($con);
				
			}
			
			else{
				echo "<script>javascript: alert('Language already added')></script>";
			}
}



?>	