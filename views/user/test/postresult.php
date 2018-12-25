
<?php
    include_once('../../../config/connection.php'); 

        $name=$_SESSION['Name'];
        $mobileno=$_SESSION['MobileNo'];
        $email=$_SESSION['Email'];
        $collegeid=$_SESSION['CollegeID'];
        $course=$_SESSION['Course'];
        $department=$_SESSION['Department'];
        $testtype=$_SESSION['TestType'];
        $questions=$_GET["questions"];
        $attend=$_GET["attend"];
        $notattend=$_GET["notattend"];
        $result=$_GET["result"];
        $cutoff=$_GET["cutoff"];
       

        $query = "INSERT INTO `result`( `name`, `mobileno`, `email`, `collegeid`, `course`, `department`, `testtype`, `questions`, `attend`, `notattend`, `result`, `cutoff`) VALUES ('${name}','${mobileno}','${email}','${collegeid}','${course}','${department}','${testtype}','${questions}','${attend}','${notattend}','${result}','${cutoff}')";

        if(mysqli_query($con, $query))
        {
            $response=array(
                'status' => 1,
                'status_message' =>'Success.'
            );
        }
        else
        {
            $response=array(
                'status' => 0,
                'status_message' =>'Failed.'
            );
        }
        header('Content-Type: application/json');
        echo json_encode($response);

       
   
?>