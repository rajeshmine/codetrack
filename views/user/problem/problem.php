<?php
    include_once('../../../config/connection.php');
    $testtype = $_SESSION['TestType'];
    
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
    <link rel="stylesheet" href="problem.css">
    <script src="problem.js"></script>
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
        <div class="container-fluid">
            <div class="pad100">
                <h3 class="white">Problems</h3>
            </div>

        </div>
    </div>
    <div style="margin: -100px 100px 10px 100px;">
    <div class="container-fluid">
        
        <div class="row mar0 problemdiv">
            
        </div>
    </div>
    </div>

</body>

</html>


       