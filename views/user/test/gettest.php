<?php
	include_once('../../../config/connection.php');
	$testtype = $_SESSION['TestType'];
	$limit = $_GET['limit'];
	$sql = "SELECT * FROM `question` WHERE `testtype` = '$testtype' && `status`='Y'  ORDER BY RAND() LIMIT $limit";
	$result=mysqli_query($con,$sql) or die(mysqli_error());
	while($rows=mysqli_fetch_array($result)){
		$data[] = $rows;
	}
	if(isset($data)){
		echo json_encode($data);	
	}else{
		$oVal = (object)[];
		echo json_encode($oVal);
	}	
?>