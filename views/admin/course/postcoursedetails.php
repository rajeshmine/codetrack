<?php
	include_once('../../../config/connection.php');
	$username=$_SESSION['UserName'];
	if(isset($_POST['courseaddbtn'])){
		$course = $_POST['course'];
		$department = $_POST['department'];
		$query = "SELECT * FROM `course` WHERE `course`='$course' AND `department`='$department'";
		$duplicatefind=mysqli_query($con,$query) or die(mysqli_error());
		if($duplicatefind){
			$rowcount=mysqli_num_rows($duplicatefind);
			if($rowcount === 0){
				$sql = "INSERT INTO `course`( `course`, `department`,  `createdby`) VALUES ('$course','$department','$username')";
				$result=mysqli_query($con,$sql) or die(mysqli_error());
				if($result){
					header('college.php');
					echo '<script>alert("Inserted Successfully");
					location.href="course.php";</script>';
				}else{
					echo '<script>alert('.mysqli_error().')</script>';
				}
			}else{
				echo '<script>alert("Details Already Found");
				location.href="course.php";</script>';
			}
		}
		
	}
?>