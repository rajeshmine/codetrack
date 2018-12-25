<?php
    include_once('../../../config/connection.php');
    $testtype = $_SESSION['TestType'];
    $username= $_SESSION['Email'];

    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Code Track</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/user.css">
    <link rel="stylesheet" href="finalpage.css">
    <script src="finalpage.js"></script>
    <script src="../../../js/common.js"></script>

</head>

<body>
    <div class="topdiv pad10">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Code Track</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <p id="time"></p>                        
                    </ul>
                </div>
            </div>
        </nav>
        
    </div>
    <div class="container-fluid">
        <div class="row mar0 pad10">
            <div class="text-center" >
                <img style="width: 350px;
    margin: 100px;" src="thankyou.png">
            </div>
            <?php
                if($testtype === 'Apptitude'){
                    $_SESSION['TestType']= 'Technical';
                    $sql = "UPDATE `login` SET `teststatus`= 'Technical' WHERE `email`='$username'";
                    $result=mysqli_query($con,$sql) or die(mysqli_error());
                        if($result){
                            echo '<div class="text-center">
                            <button onclick = "gotonextround()" class="gotonextroundbtn">Goto Next Round</button>
                            </div>';
                        }
                   
                   
                }else if($testtype === 'Technical'){
                    $sql = "UPDATE `login` SET `status`= 'N' WHERE `email`='$username'";
                    $result=mysqli_query($con,$sql) or die(mysqli_error());
                        if($result){
                           
                        }
                }else{               
                   
                   
                }
            ?>
           
        </div>
    </div>


</body>

</html>


       