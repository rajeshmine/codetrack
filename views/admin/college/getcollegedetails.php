<?php
	include_once('../../../config/connection.php');
	$sql = "SELECT * FROM `college`";
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