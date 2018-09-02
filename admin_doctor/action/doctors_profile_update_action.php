<?php
	include 'dbconnection.php';
    $con = OpenCon();
	
	$username = $_POST['username'];
	$maincategory = $_POST['maincategory'];
	$subcategory = implode(',', $_POST['subcategory']);
	$subtitle = $_POST['subtitle'];
	$facebook = $_POST['facebook'];
	$twitter = $_POST['twitter'];
	$linkedin = $_POST['linkedin'];
	$google_plus = $_POST['google_plus'];
	$rss_link = $_POST['rss_link'];
	$youtube = $_POST['youtube'];
	
	$qu = "select * from doctors where username='$username' AND maincategory='$maincategory'";
	$res = mysqli_query($con,$qu);
	mysqli_close($con);
	$num = mysqli_num_rows($res);
	
	if( $num == 1 ){
		$con = OpenCon();
		$query = "update doctors set subcategory='$subcategory', subtitle='$subtitle', facebook='$facebook', twitter='$twitter', linkedin='$linkedin', google_plus='$google_plus', rss_link='$rss_link', youtube='$youtube' where username='$username' and maincategory='$maincategory'";
		$res = mysqli_query($con,$query);
		mysqli_close($con);
		//header("location:edit_pass.php");
		
		echo '<script> alert("Profile Updated Successfully"); </script> ';
		echo '<script> window.location="../dashboard-profilesetting.php"; </script> ';
		
	}
	else{
		
		//header("location:edit_pass.php");
		echo '<script> window.location="../dashboard-profilesetting.php"; </script> ';
	}
	
?>