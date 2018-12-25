<?php
    include_once('../../../config/connection.php');    
    if(isset($_GET["course"])){
		$course = $_GET['course'];
		$sql = "SELECT `department` FROM `course` WHERE `course`='${course}'";
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
    }

    if(isset($_GET["sno"])){
        $sno=$_GET["sno"];
        $status=$_GET["status"];
        $query="UPDATE `login` SET `status`='${status}' WHERE `sno`='${sno}'";
        if(mysqli_query($con, $query))
        {
            $response=array(
                'status' => 1,
                'status_message' =>'Update Successfully.'
            );
        }
        else
        {
            $response=array(
                'status' => 0,
                'status_message' =>'Update Failed.'
            );
        }
        header('Content-Type: application/json');
        echo json_encode($response);

    }
?>