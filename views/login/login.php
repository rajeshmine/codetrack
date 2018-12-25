<?php
    include_once('../../config/connection.php');
	$username=$_POST['username'];
	$pwd=$_POST['password'];
	$finalpsw=$pwd;
	$query=mysqli_query($con,"SELECT * FROM `login` WHERE (`email`='$username' || `mobileno`= '$username') && `password`='$finalpsw'");
	$logincheck=mysqli_fetch_array($query);
		if($logincheck){
			if($logincheck['status'] == 'Y'){
				$_SESSION['Email'] = $logincheck['email'];
				$_SESSION['MobileNo'] = $logincheck['mobileno'];
				$_SESSION['Role'] = $logincheck['role'];
				$_SESSION['Name'] = $logincheck['name'];
				$_SESSION['TestType'] = $logincheck['teststatus'];;
				$_SESSION['CollegeID'] = $logincheck['collegeid'];
				$_SESSION['Department'] = $logincheck['department'];
				$_SESSION['Course'] = $logincheck['course'];
				
				if(strtolower($logincheck['role']) == 'user'){
					echo $_SESSION['TestType'];
					echo '<script>window.location="../user"</script>';

				}else if(strtolower($logincheck['role']) == 'admin'){
					echo '<script>window.location="../admin/college/college.php"</script>';
				}
				
			}else{
				echo '<script>alert("You are already attended the Test.")</script>';
				echo '<script>window.location="../../index.html"</script>';
			}
			
			
		}else{
			echo '<script>alert("Username or Password does not match.")</script>';
			echo '<script>window.location="../../index.html"</script>';
		}
	
?>