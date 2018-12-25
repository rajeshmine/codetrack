<?php
	include_once('../../../config/connection.php');
	$username=$_SESSION['UserName'];

	if(isset($_POST['collegeaddbtn'])){
		$collegeid = $_POST['collegeid'];
		$collegename = $_POST['collegename'];
		$interviewdate = $_POST['interviewdate'];
		$query = "SELECT * FROM `college` WHERE `collegeid`='$collegeid' OR `collegename`='$collegename'";
		$duplicatefind=mysqli_query($con,$query) or die(mysqli_error());
		if($duplicatefind){
			$rowcount=mysqli_num_rows($duplicatefind);
			if($rowcount === 0){
				$sql = "INSERT INTO `college`( `collegeid`, `collegename`, `interviewdate`,  `createdby`) VALUES ('$collegeid','$collegename','$interviewdate','$username')";
				$result=mysqli_query($con,$sql) or die(mysqli_error());
				if($result){
					header('college.php');
					echo '<script>alert("Inserted Successfully");
					location.href="college.php";</script>';
				}else{
					echo '<script>alert('.mysqli_error().')</script>';
				}
			}else{
				echo '<script>alert("Details Already Found");
				location.href="college.php";</script>';
			}
		}
		
	}
?>