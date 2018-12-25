<?php
	include_once('../../../config/connection.php');
	$username=$_SESSION['Email'];

	if(isset($_POST['useraddbtn'])){
		$collegeid = $_POST['collegeid'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];
		$course = $_POST['course'];
		$department = $_POST['department'];
		$tenth_percentage = $_POST['tenth_percentage'];
		$twelth_percentage = $_POST['twelth_percentage'];
		$ug_cgpa = $_POST['ug_cgpa'];
		$pg_cgpa = $_POST['pg_cgpa'];
		$yearofpass = $_POST['yearofpass'];		
		$query = "SELECT * FROM `login` WHERE `email`='$email' OR `mobileno`='$mobile'";		
		$duplicatefind=mysqli_query($con,$query) or die(mysqli_error());
		if($duplicatefind){
			$rowcount=mysqli_num_rows($duplicatefind);			
			if($rowcount === 0){
				$sql = "INSERT INTO `login`( `name`, `mobileno`, `email`,  `gender`, `dob`, `collegeid`, `course`, `department`, `tenth_percentage`, `twelth_percentage`, `ug_cgpa`, `pg_cgpa`, `yearofpass`,   `createdby`) VALUES ('$name','$mobile','$email','$gender','$dob','$collegeid','$course','$department','$tenth_percentage','$twelth_percentage','$ug_cgpa','$pg_cgpa','$yearofpass','$username')";
				$result=mysqli_query($con,$sql) or die(mysqli_error());
				if($result){
					header('user.php');
					echo '<script>alert("Inserted Successfully");
					location.href="user.php";</script>';
				}else{
					echo '<script>alert('.mysqli_error().')</script>';
				}
			}else{
				echo '<script>alert("Details Already Found");
				location.href="user.php";</script>';
			}
		}		
	}



	if(isset($_POST["import"]))
		{			
			if(isset($_FILES["excel"])){   
			$file_name =$_FILES["excel"]["name"];
			$collegeid =$_POST["excelcollegeid"];
			$Course =$_POST["excelcourse"];
			$Department =$_POST["exceldepartment"];
			$tmp = explode('.', $file_name);
			$extension = end($tmp);			
			$allowed_extension = array("xls", "xlsx", "csv");
			if(in_array($extension, $allowed_extension))
			{
			$file = $_FILES["excel"]["tmp_name"]; 
			include("../../../Classes/PHPExcel/IOFactory.php");
			$objPHPExcel = PHPExcel_IOFactory::load($file); 			
			foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
			{
			$highestRow = $worksheet->getHighestRow();
				if($highestRow > 1){
					for($row=2; $row<=$highestRow; $row++)
					{
						$Name = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(0, $row)->getValue()) ;
						$MobileNumber = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(1, $row)->getValue()) ;
						$EmailId = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
						$Gender = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(3, $row)->getValue()) ;
						$DOB = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(4, $row)->getValue()) ;				
						$Tenth_Percentage = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
						$Twelth_Percentage = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(8, $row)->getValue()) ;
						$UG_CGPA = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(9, $row)->getValue()) ;
						$PG_CGPA = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(9, $row)->getValue());
						$YearOfPass = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(9, $row)->getValue()) ;
						$query = "SELECT * FROM `login` WHERE `email`='$EmailId' OR `mobileno`='$MobileNumber'";
				
							$duplicatefind=mysqli_query($con,$query) or die(mysqli_error());
							if($duplicatefind){
								$rowcount=mysqli_num_rows($duplicatefind);						
								if($rowcount === 0){
									$sql = "INSERT INTO `login`( `name`, `mobileno`, `email`,  `gender`, `dob`, `collegeid`, `course`, `department`, `tenth_percentage`, `twelth_percentage`, `ug_cgpa`, `pg_cgpa`, `yearofpass`,   `createdby`) VALUES ('$Name','$MobileNumber','$EmailId','$Gender','$DOB','$collegeid','$Course','$Department','$Tenth_Percentage','$Twelth_Percentage','$UG_CGPA','$PG_CGPA','$YearOfPass','$username')";
									$result=mysqli_query($con,$sql) or die(mysqli_error());
									
								}
							}	
					}
				}else{
					echo '<script>alert(" Excel have 0 Records.")</script>';
				}
			} 			
				echo '<script>alert("Success.")</script>';
				echo '<script>window.location="user.php"</script>';				
			}
			else
				{
					echo '<script>alert(" Failed.")</script>';
					echo '<script>window.location="user.php"</script>';
				}			 
		}
	}
?>

 