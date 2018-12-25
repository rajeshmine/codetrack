<?php
    include_once('../../../config/connection.php');
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    <link rel="stylesheet" href="../../../css/user.css">
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="../../../css/pagination.css">
    <script src="../../../js/pagination.js"></script>
    <script src="test.js"></script>
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
            <p class="headtxt"><span>
                    <?php echo  $_SESSION['TestType'] ?></span></p>
        </div>

        <div class="row mar0">
            <div class="col-md-3 lftmd3">
                <p>List of <span id="Qcount"> </span> Questions (<span id="Qmark"></span> Marks)</p>
                <div class="lftstyle">

                </div>


            </div>
            <div class="col-md-7">
                <div id="data-container"></div>
                <div id="pagination-container"></div>
            </div>

            <div class="col-md-2">
                <img src="./../../../image/Mathematics_icon.png" class="img-responsive">
                <img src="./../../../image/ai.png" class="img-responsive">
                <img src="./../../../image/py.png" class="img-responsive" style="width: 114px;margin: 10px auto;">
                <img src="./../../../image/ml.png" class="img-responsive">
            </div>

        </div>

    </div>
    <br /><br />
    <br />
    <div class="answersubmitdiv">
        <button class="answersubmitbtn" onclick="resultfun('submit')">Submit</button>
      
    </div>
</body>

</html>