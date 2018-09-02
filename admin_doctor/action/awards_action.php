<?php

	include 'dbconnection.php';
    $con = OpenCon();

    $username = $_POST['username'];
	$awards_title = $_POST['awards_title'];
	$occasion = $_POST['occasion'];
	$date = $_POST['date'];
		
	$created_at = date('Y-m-d H:i:s');

	if(!empty($awards_title) || !empty($occasion)){
	
			
				$con = OpenCon();
				$query = "insert into doctors_awards (username, awards_title, occasion, date,  created_at )
							values ('$username', '$awards_title', '$occasion', '$date', '$created_at' ) ";
				$result = mysqli_query($con, $query);
				
				mysqli_close($con);
				
			
			
}
else{
				echo "<script>javascript: alert('Awards already added')></script>";
			}



?>	