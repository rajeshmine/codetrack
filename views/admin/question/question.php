
<?php 
  include_once('../../../config/connection.php');
  $name = $_SESSION['Name'];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>CODETRACK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
  <link rel="stylesheet" href="question.css">
  <link rel="stylesheet" href="../../../css/common.css">
  <link rel="stylesheet" href="../../../css/pagination.css">
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
    <script src="../../../js/pagination.js"></script>
    <script src="question.js"></script>
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
        <li>
          <a href="../user/user.php"><i class="far fa-user"></i>
            Users</a>         
        </li>
        <li class="active">
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
              <li><a href="../../../index.html"><i class="fas fa-power-off"></i> </a></li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="pad10">

        <ul class="nav nav-pills">
          <li class="active"><a data-toggle="pill" href="#insertmcq">Add MCQ</a></li>
          <li><a data-toggle="pill" href="#viewmcq">View MCQ</a></li>          
          <li><a data-toggle="pill" href="#insertpbmstmt">Add Problem</a></li>
          <li><a data-toggle="pill" href="#viewpbmstmt">View Problem</a></li>
        </ul>

        <div class="tab-content">
          <div id="insertmcq" class="tab-pane fade in active">

              <div class="container-fluid">
                  <form method="post" action="postquestiondetails.php" autocomplete="off">
                  
                    <div class="row mar0 pad10">
                      <h5 class="headtxt">Add Question Details
                    
                      </h5>
                                  
                      <div class="col-sm-4">
                        <div class="">
                          <label>Test Type</label>
                          <select class="form-control inputstyle" name="testtype" required>
                            <option value=""> Select Test Type</option>
                            <option value="Apptitude"> Apptitude</option>
                            <option value="Technical"> Technical</option>
                          </select>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row mar0 pad10">
                      
                        <div class="col-sm-12">
                            <div class="">
                              <label>Question</label>
                              <textarea type="text" class="form-control inputstyle" name="question" required></textarea>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row mar0 pad10">
                        <div class="col-sm-4">
                            <div class="">
                              <label>Option A</label>
                              <input type="text" class="form-control inputstyle" name="optiona" required />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="">
                              <label>Option B</label>
                              <input type="text" class="form-control inputstyle" name="optionb" required />
                            </div>
                        </div>
                        <div class="col-sm-4">
                        <div class="">
                              <label>Option C</label>
                              <input type="text" class="form-control inputstyle" name="optionc"  />
                            </div>
                        </div>
                    </div>
                    <div class="row mar0 pad10">
                        <div class="col-sm-4">
                            <div class="">
                              <label>Option D</label>
                              <input type="text" class="form-control inputstyle" name="optiond"  />
                            
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="">
                              <label>Option E</label>
                              <input type="text" class="form-control inputstyle" name="optione"  />
                            
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="">
                              <label>Answer</label>
                              <select class="form-control inputstyle" name="answer" required>
                                <option value=""> Select Answer</option>
                                <option value="A"> A</option>
                                <option value="B"> B</option>
                                <option value="C"> C</option>
                                <option value="D"> D</option>
                                <option value="E"> E</option>
                              </select>
                            </div>
                        </div>
                    </div>
                
                    <div class="row mar0 pad10">
                      <div class="text-right">
                        <button type="submit" name="questionaddbtn" class="submitbtn">              
                            Submit
                        </button>
                      </div>
                      
                    </div>
                  </form>
                  <form method="post" action="postquestiondetails.php" enctype="multipart/form-data"  autocomplete="off">
                  <div class="row mar0 pad10">
                  <h5 class="headtxt">Excel Upload             
                      </h5>                           
                    
                      <div class="col-sm-4">
                        <div class="">
                          <a href="question.xlsx" download><img title="Download Excel Format" class="excelimage" src="../../../image/document.png"> <span>CLick to to Download Excel Format</span></a>
                        </div>
                      </div>
                    </div>
                  <div class="row mar0 pad10">
                    
                      <div class="col-sm-4">
                        <div class="">
                          <label>Test Type</label>
                          <select class="form-control inputstyle" name="exceltesttype" required>
                            <option value=""> Select Test Type</option>
                            <option value="Apptitude"> Apptitude</option>
                            <option value="Technical"> Technical</option>
                          </select>
                        </div>
                      </div>
                    
                      <div class="col-sm-4">
                        <div class="">
                          <label>Choose Excel File</label>
                          <input type="file" class="form-control inputstyle"  accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="excel" required />
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
                  
              </div>

          </div>

          <div id="viewmcq" class="tab-pane fade">

              <div class="row mar0 pad10">
                <h5 class="headtxt">View Questions                  
                </h5>                                
                <div class="col-sm-4">
                  <div class="">
                    <select class="form-control inputstyle" name="testtypefilter" onchange="filtertesttype(this.value);" required>
                        
                        <?php
                            $gettesttype=mysqli_query($con,"SELECT DISTINCT testtype FROM question WHERE status = 'Y'");
                            while($row=mysqli_fetch_array($gettesttype)){                         
                            
                        ?>                        
                            <option value="<?php  echo $row['testtype'];?>"><?php echo $row['testtype'];?></option>
                            <?php }?>
                        
                    </select>
                  </div>
                </div>                    
              </div>
              <div class="row mar0 pad10">
                <h5 class="questypehead"></h5>
                <div id="mcq-container">
               
                </div>
                <div class="mar10" id="mcq-pagination-container"></div>
              </div>             

          </div>

          <div id="insertpbmstmt" class="tab-pane fade">
          <form method="post" action="postproblemdetails.php" autocomplete="off">
                  
                  <div class="row mar0 pad10">
                    <h5 class="headtxt">Add Problem Statements                  
                    </h5>                                
                    <div class="col-sm-12">
                      <div class="">
                        <label>Problem</label>
                        <input type="text" class="form-control inputstyle" name="problem" required />
                      </div>
                    </div>                    
                  </div>

                  <div class="row mar0 pad10">                    
                      <div class="col-sm-12">
                          <div class="">
                            <label>Description</label>
                            <textarea type="text" class="form-control inputstyle" name="description" required></textarea>
                          </div>
                      </div>                      
                  </div>
                  <div class="row mar0 pad10">                    
                      <div class="col-sm-12">
                          <div class="">
                            <label>Input Format</label>
                            <textarea type="text" class="form-control inputstyle" name="inputformat" required></textarea>
                          </div>
                      </div>                      
                  </div>
                  <div class="row mar0 pad10">                    
                      <div class="col-sm-12">
                          <div class="">
                            <label>constraints</label>
                            <textarea type="text" class="form-control inputstyle" name="constraints" required></textarea>
                          </div>
                      </div>                      
                  </div>

                  <div class="row mar0 pad10">                    
                      <div class="col-sm-12">
                          <div class="">
                            <label>Output Format</label>
                            <textarea type="text" class="form-control inputstyle" name="outputformat" required></textarea>
                          </div>
                      </div>                      
                  </div>
                  <div class="row mar0 pad10">                    
                      <div class="col-sm-12">
                          <div class="">
                            <label>Sample Input</label>
                            <textarea type="text" class="form-control inputstyle" name="sampleinput" required></textarea>
                          </div>
                      </div>                      
                  </div>
                  <div class="row mar0 pad10">                    
                      <div class="col-sm-12">
                          <div class="">
                            <label>Sample Output</label>
                            <textarea type="text" class="form-control inputstyle" name="sampleoutput" required></textarea>
                          </div>
                      </div>                      
                  </div>
                  
                  
                 
              
                  <div class="row mar0 pad10">
                    <div class="text-right">
                      <button type="submit" name="problemaddbtn" class="submitbtn">              
                          Submit
                      </button>
                    </div>
                    
                  </div>
                </form>
          </div>

          <div id="viewpbmstmt" class="tab-pane fade">
            
            <div class="row mar0 pad10">
                <h5 class="headtxt">View Problems                  
                </h5>                                
                                   
              </div>
              <div class="row mar0 pad10 problemdiv">
            
                <div id="problem-container">
               
                </div>
                <div class="mar10" id="problem-pagination-container"></div>
              </div>  

          </div>

        </div>
    </div>

      



    </div>
  </div>
</body>

</html>