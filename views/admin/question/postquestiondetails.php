<?php
	include_once('../../../config/connection.php');
	$username=$_SESSION['UserName'];
	
	if(isset($_POST['questionaddbtn'])){
		$testtype = $_POST['testtype'];
		$question = $_POST['question'];
		$optiona = $_POST['optiona'];
		$optionb = $_POST['optionb'];		
		if($_POST['optionc'] == null ){
			$optionc=null;
		}else{
			$optionc = $_POST['optionc'];
		}
		if($_POST['optiond'] == null ){
			$optiond=null;
		}else{
			$optiond = $_POST['optiond'];
		}
		if($_POST['optione'] == null ){
			$optione=null;
		}else{
			$optione = $_POST['optione'];
		}
		$answer = $_POST['answer'];
		
		$query = "INSERT INTO `question`( `testtype`,  `question`, `optiona`, `optionb`, `optionc`, `optiond`, `optione`, `answer`, `createdby`) VALUES ('$testtype','$question','$optiona','$optionb','$optionc','$optiond','$optione','$answer','$username')";
		$result=mysqli_query($con,$query) or die(mysqli_error());
		if($result){
			echo '<script>alert("Success.")</script>';
			echo '<script>window.location="question.php"</script>';
		}else{
			echo '<script>alert(" Failed.")</script>';
			echo '<script>window.location="question.php"</script>';
		}		
	}

	if(isset($_POST["import"]))
		{			
			if(isset($_FILES["excel"])){   
			$file_name =$_FILES["excel"]["name"];
			$testtype = $_POST['exceltesttype'];
			$qus=mysqli_query($con,"SELECT * FROM `question` WHERE  testtype='$testtype'");
			while($row=mysqli_fetch_array($qus)){
				$count=$row['questionno'];
			}
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
			for($row=2; $row<=$highestRow; $row++)
			{			
								
				$question = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
				$optiona = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
				$optionb = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
				$optionc = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
				$optiond = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
				$optione = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
				$answer = mysqli_real_escape_string($con, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
				$query = "INSERT INTO `question`( `testtype`, `question`, `optiona`, `optionb`, `optionc`, `optiond`, `optione`, `answer`, `createdby`) VALUES ('$testtype','$question','$optiona','$optionb','$optionc','$optiond','$optione','$answer','$username')";
				$result=mysqli_query($con,$query) or die(mysqli_error());				
			}
			} 			
				echo '<script>alert("Success.")</script>';
				echo '<script>window.location="question.php"</script>';				
			}
			else
				{
					echo '<script>alert(" Failed.")</script>';
					echo '<script>window.location="question.php"</script>';
				}			 
		}
	}	

?>

 