
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
 
  <link rel="stylesheet" href="user.css">
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
    <script src="user.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
	 <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
	 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
        <li class="active">
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
        <li>
          <a href="../result/result.php"><i class="fas fa-clipboard-check"></i>
            Result</a>         
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
              <li><a href="../../login/login.html"><i class="fas fa-power-off"></i> </a></li>
            </ul>
          </div>
        </div>
      </nav>


      <div class="container-fluid">
          <form method="post" action="postuserdetails.php" autocomplete="off">
           
            <div class="row mar0 pad10">
              <h5 class="headtxt">Add User Details
             
              </h5>
                           
              <div class="col-sm-4">
                <div class="">
                  <label>College ID</label>
                  <select class="form-control inputstyle" name="collegeid" required>
                    <option value=""> Select College ID</option>
                  <?php
                    $sql = "SELECT * FROM `college`";
                    $result=mysqli_query($con,$sql) or die(mysqli_error());
                    while($rows=mysqli_fetch_array($result)){
                     echo '<option value="'.$rows['collegeid'].'">'.$rows['collegeid'].'</option>';
                    }
                  ?>
                  
                    
                  </select>
                </div>
              </div>
            </div>
            <div class="row mar0 pad10">
              
                <div class="col-sm-4">
                    <div class="">
                      <label>Name</label>
                      <input type="text" class="form-control inputstyle" name="name" required />
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="">
                      <label>Email ID</label>
                      <input type="text" class="form-control inputstyle" name="email" required />
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="">
                      <label>Mobile Number</label>
                      <input type="text" class="form-control inputstyle" name="mobile" required />
                    </div>
                </div>
            </div>
            <div class="row mar0 pad10">
                <div class="col-sm-4">
                    <div class="">
                      <label>Gender</label>
                      <select class="form-control inputstyle" name="gender" required>
                          <option value=""> Select Gender</option>
                          <option value="Male"> Male</option>
                          <option value="Female"> Female</option>                       
                      </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="">
                      <label>DOB</label>
                      <input type="text" class="form-control inputstyle datepicker" name="dob" required readonly />
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="">
                      <label>Course</label>
                      <select class="form-control inputstyle" name="course" required>
                          <option value=""> Select Course</option>
                        <?php
                          $sql = "SELECT `course` FROM `course` GROUP BY `course`";
                          $result=mysqli_query($con,$sql) or die(mysqli_error());
                          while($rows=mysqli_fetch_array($result)){
                          echo '<option value="'.$rows['course'].'">'.$rows['course'].'</option>';
                          }
                        ?> 
                      </select>
                    </div>
                </div>
            </div>
            <div class="row mar0 pad10">
                <div class="col-sm-4">
                    <div class="">
                      <label>Department</label>
                      <select class="form-control inputstyle" name="department" required>
                          <option value=""> Select Department</option>                       
                      </select>
                     
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="">
                      <label>10th Percentage</label>
                      <input type="text" class="form-control inputstyle" name="tenth_percentage" required />
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="">
                      <label>12th Percentage</label>
                      <input type="text" class="form-control inputstyle" name="twelth_percentage" required />
                    </div>
                </div>
            </div>
            <div class="row mar0 pad10">
                <div class="col-sm-4">
                    <div class="">
                      <label>UG CGPA</label>
                      <input type="text" class="form-control inputstyle" name="ug_cgpa" required />
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="">
                      <label>PG CGPA</label>
                      <input type="text" class="form-control inputstyle" name="pg_cgpa" />
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="">
                      <label>Year of Passing</label>
                      
                      <input type="text" class="form-control inputstyle yearofpassing" name="yearofpass" required readonly/>
                    </div>
                </div>
            </div>
            <div class="row mar0 pad10">
              <div class="text-right">
                <button type="submit" name="useraddbtn" class="submitbtn">              
                    Submit
                </button>
              </div>
              
            </div>
          </form>
          <form method="post" action="postuserdetails.php" enctype="multipart/form-data"  autocomplete="off">
          <div class="row mar0 pad10">
              <h5 class="headtxt">Excel Upload             
              </h5>                           
             
              <div class="col-sm-4">
                <div class="">
                  <label>College ID</label>
                  <select class="form-control inputstyle" name="excelcollegeid" required>
                    <option value=""> Select College ID</option>
                  <?php
                    $sql = "SELECT * FROM `college`";
                    $result=mysqli_query($con,$sql) or die(mysqli_error());
                    while($rows=mysqli_fetch_array($result)){
                     echo '<option value="'.$rows['collegeid'].'">'.$rows['collegeid'].'</option>';
                    }
                  ?>                 
                    
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                  <div class="">
                    <label>Course</label>
                    <select class="form-control inputstyle" name="excelcourse" required>
                        <option value=""> Select Course</option>
                      <?php
                        $sql = "SELECT `course` FROM `course` GROUP BY `course`";
                        $result=mysqli_query($con,$sql) or die(mysqli_error());
                        while($rows=mysqli_fetch_array($result)){
                        echo '<option value="'.$rows['course'].'">'.$rows['course'].'</option>';
                        }
                      ?> 
                    </select>
                  </div>
              </div>
              <div class="col-sm-4">
                  <div class="">
                    <label>Department</label>
                    <select class="form-control inputstyle" name="exceldepartment" required>
                        <option value=""> Select Department</option>                       
                    </select>
                    
                  </div>
              </div>
              </div>
              <div class="row mar0 pad10">
              <div class="col-sm-4">
                <div class="">
                  <label>Choose Excel File</label>
                  <input type="file" class="form-control inputstyle"  accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="excel" required />
                </div>
              </div>
              <div class="col-sm-4">
                <div class="">
                  <a href="user.xlsx" download><img title="Download Excel Format" class="excelimage" src="../../../image/document.png"> <span>CLick to to Download Excel Format</span></a>
                </div>
              </div>
            </div>
            <div class="row mar0 pad10">
              <div class="text-right">
                <button type="submit" name="import" class="submitbtn">              
                      Upload
                  </button>
              </div>
              
            </div>
          </form>
          <div class="row mar0 pad10">
            <div class="table-responsive pad10 whitebg">
              <h5 class="headtxt">Users Details</h5>
              
              <table id="usertable" class="table table-bordered table-condensed">
                <thead>
                  <tr>
                    <th><input class="checkall" type="checkbox"></th>	
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                   
                    <th>College ID</th>
                    <th>Course</th>
                    <th>Department</th>
                    <th>10th Per</th>
                    <th>12th Per</th>
                    <th>UG CGPA</th>
                    <th>PG CGPA</th>
                    <th>Year of Pass</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
             
              <h5 class="instuctiontxt">*** Click Status text for  Status Change</h5>
              <div class="text-right">
                  <button class="sendpasswordbtn" onclick="passwordsend()">Send Password to All Users</button>
              </div>
               
            </div>
          </div>
      </div>
    </div>
  </div>
</body>

</html>
