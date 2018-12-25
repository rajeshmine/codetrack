
<?php   
    include_once('../../../config/connection.php');
    $password = randomPassword();
    $email = $_GET['email'];
	$sql = "UPDATE `login` SET `password`='$password' WHERE `email`='$email'";
	$result=mysqli_query($con,$sql) or die(mysqli_error());	
	if(isset($result)){
        error_reporting(E_STRICT);
        date_default_timezone_set('America/Toronto');
        require("../../../PHPMailer/class.phpmailer.php");
        $mail = new PHPMailer();
        $body = "Login Details <br/> Username : " . $email . "<br/> Password : " . $password;
        $mail->IsSMTP();
        $mail->SMTPDebug  = 2;
        $mail->SMTPAuth   = true; 
        $mail->SMTPSecure = "ssl"; 
        $mail->Host       = "smtp.gmail.com"; 
        $mail->Port       = 465;              
       
        $mail->Username   = "apps@prematix.com";  
        $mail->Password   = "Preapps123";  
        $mail->SetFrom("apps@prematix.com", "Prematix");
        $mail->AddReplyTo("apps@prematix.com", "Prematix"); 
        $mail->Subject    = "Code Track Login Details";
        $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; 
        $mail->MsgHTML($body);
        $address = $email; 
        $mail->AddAddress($address);
        if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
        echo json_encode($mail);
        }
    }else{
        $oVal = (object)[];
        echo json_encode($oVal);
    }	
?>

<?php 
    function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array();
        $alphaLength = strlen($alphabet) - 1;
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass);
    }
?>

