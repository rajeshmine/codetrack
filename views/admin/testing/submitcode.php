<?php
    include_once('../../../config/connection.php');
    date_default_timezone_set('Asia/Kolkata');
    $mobileno = $_SESSION['MobileNo'];
    $sno = $_POST['sno'];
    $lang = $_POST['lang'];
    $name = $_SESSION['Name'];
    $email = $_SESSION['Email'];
    $mobileno = $_SESSION['MobileNo'];
    $GLOBALS['mobileno'] = $_SESSION['MobileNo'];
    $GLOBALS['code'] = $_POST['code'];
    $GLOBALS['lang'] = $_POST['lang'];       
    $GLOBALS['sno'] = $_POST['sno'];   
    $path = "Temp/".$GLOBALS['mobileno']."_".$GLOBALS['sno'].".".strtolower($GLOBALS['lang']);
    if (!file_exists('Temp')) {
        mkdir('Temp', 0777, true);
        $myfile = fopen("Temp/".$GLOBALS['mobileno']."_".$GLOBALS['sno'].".".strtolower($GLOBALS['lang']), "w") or die("Unable to open file!");
        $txt = $GLOBALS['code'];
        fwrite($myfile, $txt);
        fclose($myfile);
    }else{
        $myfile = fopen("Temp/".$GLOBALS['mobileno']."_".$GLOBALS['sno'].".".strtolower($GLOBALS['lang']), "w") or die("Unable to open file!");
        $txt = $GLOBALS['code'];
        fwrite($myfile, $txt);
        fclose($myfile);
    }
  
    $sql = "SELECT * FROM `codingresult` WHERE `mobileno`='$mobileno' && `questionno`='$sno'";		
		$duplicatefind=mysqli_query($con,$sql) or die(mysqli_error());
		if($duplicatefind){
			$rowcount=mysqli_num_rows($duplicatefind);			
            if($rowcount === 0){
                $query = "INSERT INTO `codingresult`( `mobileno`, `questionno`, `filepath`,`email`,`name`) VALUES ('$mobileno','$sno','$path','$email','$name')";
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
            }
        }
    


?>