<?php
	include_once('../../../config/connection.php');
	$username=$_SESSION['UserName'];

	if(isset($_POST['testtimeaddbtn'])){
		$testtype = $_POST['testtype'];
        $questions = $_POST['questions'];
        $cutoff = $_POST['cutoff'];
        $time = $_POST['time'];
        
       
		$query = "SELECT * FROM `testtime` WHERE `testtype`='$testtype'";
		$duplicatefind=mysqli_query($con,$query) or die(mysqli_error());
		if($duplicatefind){
			$rowcount=mysqli_num_rows($duplicatefind);
			if($rowcount === 0){
				$sql = "INSERT INTO `testtime`(`testtype`,`questions`, `cutoff`,`time`, `createdby`) VALUES ('$testtype','$questions','$cutoff','$time','$username')";
				$result=mysqli_query($con,$sql) or die(mysqli_error());
				if($result){
					header('testtime.php');
					echo '<script>alert("Inserted Successfully");
					location.href="testtime.php";</script>';
				}else{
					echo '<script>alert('.mysqli_error().')</script>';
				}
			}else{
				$sql = "UPDATE `testtime` SET `time`='$time',`questions`='$questions',`cutoff`='$cutoff' WHERE `testtype`='$testtype'";
				$result=mysqli_query($con,$sql) or die(mysqli_error());
				if($result){
					header('testtime.php');
					echo '<script>alert("Updated Successfully");
					location.href="testtime.php";</script>';
				}else{
					echo '<script>alert('.mysqli_error().')</script>';
				}
			}
		}
		
	}
?>