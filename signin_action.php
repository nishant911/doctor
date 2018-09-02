<?php
	include 'dbconnection.php';
    $con = OpenCon();
	
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	
	$query = "SELECT maincategory, username, password 
    FROM doctors 
    WHERE username='$username' AND password='$password' 
    UNION 
    SELECT maincategory, username, password 
    FROM hospitals 
    WHERE username='$username' AND password='$password'
    UNION 
    SELECT maincategory, username, password 
    FROM spas 
    WHERE  username='$username' AND password='$password'
    UNION 
    SELECT maincategory, username, password 
    FROM pharmacies 
    WHERE username='$username' AND password='$password'
    UNION 
    SELECT maincategory, username, password 
    FROM labs 
    WHERE username='$username' AND password='$password'
    UNION 
    SELECT maincategory, username, password 
    FROM fitness 
    WHERE username='$username' AND password='$password'
    UNION 
    SELECT maincategory, username, password 
    FROM blood_bank 
    WHERE username='$username' AND password='$password'
    UNION 
    SELECT maincategory, username, password 
    FROM clinics 
    WHERE username='$username' AND password='$password'";


	$result = mysqli_query($con, $query);
	
	$num = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);

	/*if (!$result) {
			printf("Error: %s\n", mysqli_error($con));
			exit();
		}*/
	if($num == 1 && $row['maincategory'] == "Doctors"){
		session_start();
		$_SESSION['username']=$row['username'];
		
        echo '<script> window.location="admin_doctor/dashboard.php"; </script> ';
		//echo "success";
		
	}
	else{
		$Message = "Invalid UserName or Password";
		header("location:signin-signup.php?Message={$Message}");
	}

?>