<?php
	include_once('../../../config/connection.php');
    $sno=$_GET["sno"];
    $status=$_GET["status"];

    $query="UPDATE `course` SET `status`='${status}' WHERE `sno`='${sno}'";
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
?>