
<?php 
  include_once('../../../config/connection.php');
  $role=$_SESSION['Role'];
  $name = $_SESSION['Name'];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>CODETRACK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
  <link rel="stylesheet" href="result.css">
  <link rel="stylesheet" href="../../../css/common.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
    crossorigin="anonymous">
    <script src="../../../js/common.js"></script>
    <script src="result.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
	 <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
	 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.3/jquery.timepicker.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.3/jquery.timepicker.min.js"></script>
</head>

<body>
  <div class="wrapper">
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3 class="fontsize22"><img class="codetrackerlogo" src="./../../../image/WB0196048.png"> <span>Code Track</span></h3>
        <p class="alignrgt">powered by Prematix</p>
        <hr />
      </div>

      <ul class="list-unstyled components">
        <p><i class="fas fa-laptop-code"></i> CODE TRACK</p>
        <li>
          <a href="../college/college.php"><i class="far fa-building"></i>
            College</a>
         
        </li>
        <li>
          <a href="../course/course.php"><i class="fab fa-leanpub"></i>
            Course</a>
         
        </li>
        <li>
          <a href="../user/user.php"><i class="far fa-user"></i>
            Users</a>         
        </li>
        <li>
          <a href="../question/question.php"><i class="far fa-question-circle"></i>
            Questions</a>         
        </li>
        <li>
          <a href="../testtime/testtime.php"><i class="far fa-clock"></i>
            Test Time</a>         
        </li>
        <li class="active">
            <a href="#Result" data-toggle="collapse" aria-expanded="false"><i class="fas fa-clipboard-check"></i> Result</a>
            <ul class="collapse list-unstyled" id="Result">
                <li><a  href="../result/result.php">Apptitude & Technical</a></li>
                <li><a href="codingresult/codingresult.php">Coding Round</a></li>
                <li><a href="#">GD Round</a></li>
                <li><a href="#">HR Round</a></li>
            </ul>
        </li>
      </ul>
    </nav>

    <div id="content">

      <nav class="navbar whitebg">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <button type="button" id="sidebarCollapse">
              <i class="fas fa-align-left"></i>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">

            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="../../../index.html"><i class="fas fa-home"></i> Home</a>
              </li>
              <li><a><i class="far fa-user"></i> <?php echo $name; ?></a></li>
              <li><a href="../../../index.html"><i class="fas fa-power-off"></i> </a></li>
            </ul>
          </div>
        </div>
      </nav>


      <div class="container-fluid">  

          <div class="row mar0 pad10">
            <div class="table-responsive pad10 whitebg">
              <h5 class="headtxt">Apptitude and Technical Test Result</h5>
              <table id="resulttable" class="table table-bordered table-condensed">
                <thead>
                   <tr>		
                    <th></th>				
                    <th colspan="4">Profile</th>
                    <th colspan="3">Apptitude</th>
                    <th colspan="3">Technical</th>
                  </tr>
                  <tr>						
                    <th><input class="checkall" type="checkbox"></th>
                    <th>Sno</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>CollegeID</th>
                    <th>Course</th>
                    <th>Department</th>
                    <th>Questions</th>
                    <th>Result</th>
                    <th>Cutoff</th>
                    <th>Questions</th>
                    <th>Result</th>
                    <th>Cutoff</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
              <div class="text-right">
                  <button class="sendpasswordbtn" onclick="passwordsend()">Submit Level 2 Candidates</button>
              </div>
            </div>
          </div>
          
          <div class="row mar0 pad10">

            <div class="table-responsive pad10 whitebg">
              <h5 class="headtxt">Coding Result Details</h5>

                <div class="col-sm-4">
                    <select class="form-control inputstyle useremail" onchange="codingresult()">
                       <option>
                          Select User
                        </option>
                       <?php
                            $getuser=mysqli_query($con,"SELECT * FROM codingresult Group By email ");
                            while($row=mysqli_fetch_array($getuser)){                         
                            
                        ?>                        
                            <option value="<?php  echo $row['email'];?>"><?php echo $row['name'];?></option>
                            <?php }?>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control inputstyle email" readonly placeholder="Email Address">
                </div>
                <div class="col-sm-4">
                    <input  type="text"  class="form-control inputstyle name" readonly  placeholder="Name">
                </div>
            </div>
            <br/>
            <div class="row mar0">
            
                <div class="codinganswer">
                  </div>
            </div>
                  
          </div>
          <br/>

      </div>
    </div>
  </div>
</body>

</html>