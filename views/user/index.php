<?php 
   include_once('../../config/connection.php');
   $testtype = $_SESSION['TestType'];
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <title>Code Track</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="../../css/user.css">
    <script src="../../js/common.js"></script>

</head>

<body>
    <div class="topdiv">
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

                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="pad100">
                <h3 class="white">Before Start Test</h3>
                <p class="white">Follow the instructions.</p>
                <p class="white">Mutiple Rounds are there.All Rounds have an Group of Questions.</p>
                <p class="white">Each Round have an Eligibility Creteria.</p>
                <p class="white">Don't Refresh the Page.</p>
                <div class="text-right">
                    <?php 
                       if($testtype == 'Coding'){
					
                            echo '<button onclick="location.href=\'codingtest/codingtest.php\'" class="starttestbtn">START TEST</button>';
    
                        }else{
                            echo '<button onclick="location.href=\'test/test.php\'" class="starttestbtn">START TEST</button>';
                        }
                    ?>
                   
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="flexdiv">
            <div>
                <h4>Apptitude</h4>
                <p>First Round is an Apptitude Round.</p>
                <p>Questions are in MCQ Format.</p>
            </div>
            <div>
                <h4>Technical</h4>
                <p>Second Round is an Technical Round.</p>
                <p>Questions are in MCQ Format.</p>
            </div>
            <div>
                <h4>Coding</h4>
                <p>Final Round is an Codind Round.</p>
                <p>Questions are in Sentence Format.</p>
            </div>
        </div>
    </div>
</body>

</html> --> 


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
    <link rel="stylesheet" href="../../css/user.css">
    <script src="../../js/common.js"></script>

</head>

<body>
    <div class="topdiv">
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

                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="pad100 bg-set">
                <h3 class="white">Before Start Test</h3>
                <p class="white">Follow the instructions.</p>
                <p class="white">Mutiple Rounds are there.All Rounds have an Group of Questions.</p>
                <p class="white">Each Round have an Eligibility Creteria.</p>
                <p class="white">Don't Refresh the Page.</p> 
            </div>
            
            <div class="text-center">
                    <?php 
                       if($testtype == 'Coding'){
					
                            echo '<button onclick="location.href=\'problem/problem.php\'" class="starttestbtn">START TEST</button>';
    
                        }else{
                            echo '<button onclick="location.href=\'test/test.php\'" class="starttestbtn">START TEST</button>';
                        }
                    ?>
                   
                </div>
            
            <br>
        </div>
    </div>
    <div class="container-fluid">
        <div class="flexdiv">
            <div>
                <h4>Apptitude</h4>
                <p>First Round is an Apptitude Round.</p>
                <p>Questions are in MCQ Format.</p>
            </div>
            <div>
                <h4>Technical</h4>
                <p>Second Round is an Technical Round.</p>
                <p>Questions are in MCQ Format.</p>
            </div>
            <div>
                <h4>Coding</h4>
                <p>Final Round is an Codind Round.</p>
                <p>Questions are in Sentence Format.</p>
            </div>
        </div>
    </div>
</body>

</html>