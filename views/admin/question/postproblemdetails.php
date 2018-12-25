<?php
	include_once('../../../config/connection.php');
	$username=$_SESSION['Email'];
	
	if(isset($_POST['problemaddbtn'])){
		$problem = $_POST['problem'];
		$description = $_POST['description'];
		$inputformat = $_POST['inputformat'];
		$constraints = $_POST['constraints'];
		$outputformat = $_POST['outputformat'];
		$sampleinput = $_POST['sampleinput'];
		$sampleoutput = $_POST['sampleoutput'];
		
		$query = "INSERT INTO `problem`( `problem`, `description`, `inputformat`, `constraints`, `outputformat`, `sampleinput`, `sampleoutput`, `createdby`) VALUES ('$problem','$description','$inputformat','$constraints','$outputformat','$sampleinput','$sampleoutput','$username')";
		$result=mysqli_query($con,$query) or die(mysqli_error());
		if($result){
			echo '<script>alert("Success.")</script>';
			echo '<script>window.location="question.php"</script>';
		}else{
			echo '<script>alert(" Failed.")</script>';
			echo '<script>window.location="question.php"</script>';
		}		
	}

	
?>