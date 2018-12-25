<?php
    $sno =  $_GET['question'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CODE TRACK</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../css/user.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="http://codemirror.net/lib/codemirror.css">
  <script src="http://codemirror.net/lib/codemirror.js"></script>
  <script src="http://codemirror.net/addon/edit/matchbrackets.js"></script>
  <script src="http://codemirror.net/mode/javascript/javascript.js"></script>
  <script src="http://codemirror.net/mode/clike/clike.js"></script>
  <script type="text/javascript" src="http://codemirror.net/mode/xml/xml.js"></script>
  <script type="text/javascript" src="https://codemirror.net/mode/python/python.js"></script>
  <script type="text/javascript" src="https://codemirror.net/3/mode/htmlmixed/htmlmixed.js"></script>

  <link rel="stylesheet" href="codingtest.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
  <script src="codingtest.js"></script>
  <script src="../../../js/common.js"></script>

  <link rel="stylesheet" href="http://codemirror.net/theme/3024-day.css">
  <link rel="stylesheet" href="http://codemirror.net/theme/3024-night.css">
  <link rel="stylesheet" href="http://codemirror.net/theme/ambiance.css">
  <link rel="stylesheet" href="http://codemirror.net/theme/base16-dark.css">
  <link rel="stylesheet" href="http://codemirror.net/theme/base16-light.css">
  <link rel="stylesheet" href="http://codemirror.net/theme/blackboard.css">
  <link rel="stylesheet" href="http://codemirror.net/theme/cobalt.css">
  <link rel="stylesheet" href="http://codemirror.net/theme/eclipse.css">
  <link rel="stylesheet" href="http://codemirror.net/theme/elegant.css">
  <link rel="stylesheet" href="http://codemirror.net/theme/erlang-dark.css">
  <link rel="stylesheet" href="http://codemirror.net/theme/lesser-dark.css">
  <link rel="stylesheet" href="http://codemirror.net/theme/midnight.css">
  <link rel="stylesheet" href="http://codemirror.net/theme/monokai.css">
  <link rel="stylesheet" href="http://codemirror.net/theme/neat.css">

  <script src='http://codemirror.net/addon/edit/closetag.js'></script>
  <script src='http://codemirror.net/addon/selection/active-line.js'></script>
  <script src='http://codemirror.net/addon/fold/foldcode.js'></script>
  <script src='http://codemirror.net/addon/fold/foldgutter.js'></script>
  <script src='http://codemirror.net/addon/fold/brace-fold.js'></script>
  <script src='http://codemirror.net/addon/fold/xml-fold.js'></script>
  <script src='http://codemirror.net/addon/fold/comment-fold.js'></script>


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
        <div class="row pad10">
            <div class="col-sm-6 pad0">
                <div class="pbmstmtdiv">
                    <h4><span style="border-bottom:2px solid;padding:6px;">Problem Statement</span></h4>
                    <div class="pad10">
                        <h3>Java Essentials (100 Marks)</h3>
                        <p>You just need to read 5 strings from stdin and print them to stdout.</p>
                    </div>  
                    
                    <div class="pad10">
                        <h5 class="headtxt">Input Format</h5>
                        <p>Read 5 strings with one string on each line.</p>
                    </div>  
                    <div class="pad10">
                        <h5 class="headtxt">Constraints</h5>
                        <p>1 <= |S| <= 10^5</p>

                    </div>  
                    <div class="pad10">
                        <h5 class="headtxt">Output Format</h5>
                        <p>Print your strings to the stdout with each string in each line.</p>
                    </div>  
                    <div class="pad10">
                        <h5 class="headtxt">Sample TestCase 1</h5>
                        <p>Input</p>
                        <div class="sampleinputdiv">
                            <p>I am awesome.</p>
                            <p>How are you?</p>
                            <p>I m Fine.</p>
                            <p>Ok</p>
                            <p>Same Here</p>
                        </div>
                    </div>  
                    <div class="pad10">                        
                        <p>Output</p>
                        <div class="sampleinputdiv">
                            <p>I am awesome.</p>
                            <p>How are you?</p>
                            <p>I m Fine.</p>
                            <p>Ok</p>
                            <p>Same Here</p>
                        </div>
                    </div> 
                   
                </div>
            </div>
            <div class="col-sm-6 pad0">
                <div class="compilerdiv">
                <div class="row pad10" style="margin: 0">
                    <form id="myform" name="myform" action="javascript:void(0);">

                        <div class="selectlangdiv pad10 text-right">

                        <select name="lang" id="languageselect">
                            <option value="java" selected>Java</option>
                            <option value="python">Python</option>
                            <option value="Web">HTML,CSS,Javascript</option>
                        </select>
                        <span class="settingsicon glyphicon glyphicon-cog" onclick="settingsdivtoggle()"></span>

                        </div>
                        <div class="settingsdiv">
                        <div class="arrow-up"></div>
                        <p class="fontweight500">Theme</p>
                        <div class="btn-group">
                            <button type="button" class="btn themebtn themeselected" value="default">Default</button>
                            <button type="button" class="btn themebtn" value="monokai">Monokai</button>
                            <button type="button" class="btn themebtn" value="cobalt">Cobalt</button>
                            <button type="button" class="btn themebtn" value="blackboard">Blackboard</button>
                            <button type="button" class="btn themebtn" value="ambiance">Ambiance</button>
                        </div>
                        <div class="text-right">
                            <button class="closebtn" type="button" onclick="settingsdivtoggle()">Close</button>
                        </div>
                        </div>
                        <div class="codeouterdiv">

                        </div>

                        <div class="col-sm-12" id="inputRadiocolumn">
                        
                        <div class="pad10 inputRadiodiv">
                            <div class="pretty p-switch p-fill">
                                <input type="checkbox" id="inputRadio" />
                                <div class="state">
                                    <label>Compile with Custom Input</label>
                                </div>
                            </div>
                                    
                        </div>
                        </div>
                        <div class="col-sm-12" id="inputdiv">
                            <p class="outputheadtxt">Custom Input</p>
                            <textarea class="form-control" rows="5" cols="100" id="input" name="input" placeholder="Enter Input here ..."></textarea>
                        </div>       

                        <div class="text-right">
                        <button type="submit" class="submitbtn" value="submit" name="submit" onclick="compilecode()">Compile & Run Code</button>
                        </div>
                        <div class="col-sm-12 pad0" id="outputscreen">
                        <p class="outputheadtxt">Output Screen</p>
                        <div class="preview">
                            <iframe id="previewTarget">
                            <!DOCTYPE html>
                            <html lang="en">

                            <head>
                                <title>Output</title>
                                <meta charset="utf-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1">
                                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                            </head>

                            <body>
                            </body>

                            </html>
                            </iframe>
                        </div>
                        </div>
                       
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>   
    <br/><br/>
    <br/>
    <div class="submitcodediv">
        <button class="submitcodebtn" onclick="submitcodefun()">Submit Code</button>
        <button class="submitcodebtn" onclick="finishtest()">Finish Test</button>
    </div>
    <script>
        $(document).ready(function(){
            gettimedetails();
            singleproblemget();
           
        });

        function submitcodefun(){
            var code = $('#code').val();
            var lang = $('#languageselect').val();
            var sno = <?php echo   $sno ; ?>;
            $.ajax ({
                url: "submitcode.php",
                type: "post",
                data: { 
                    code : code ,
                    lang : lang,
                    sno : sno
                },
                success: function( result ) {
                    location.href="../problem/problem.php";
                }
            });
        }
       
        function finishtest(){
            location.href="../finalpage/finalpage.php";
        }


        function singleproblemget() {
            var sno = <?php echo   $sno ; ?>;
            $.get(`getsingleproblem.php?sno=${sno}`, function (data, status) {
                if (status === 'success') {
                    if (data) {
                        let tempData = JSON.parse(data);
                        if (tempData.length > 0) {
                            $('.pbmstmtdiv').empty();
                            for (let i = 0; i < tempData.length; i++) {
                               $('.pbmstmtdiv').append(
                                   `
                                   <h4><span style="border-bottom:2px solid;padding:6px;">Problem Statement</span></h4>
                                    <div class="pad10">
                                        <h3>${tempData[i].problem}</h3>
                                        <p>${tempData[i].description}</p>
                                    </div>  
                                    
                                    <div class="pad10">
                                        <h5 class="headtxt">Input Format</h5>
                                        <pre>${tempData[i].inputformat}</pre>
                                    </div>  
                                    <div class="pad10">
                                        <h5 class="headtxt">Constraints</h5>
                                        <pre>${tempData[i].constraints}</pre>

                                    </div>  
                                    <div class="pad10">
                                        <h5 class="headtxt">Output Format</h5>
                                        <pre>${tempData[i].outputformat}</pre>
                                    </div>  
                                    <div class="pad10">
                                        <h5 class="headtxt">Sample TestCase</h5>
                                        <p>Input</p>
                                        <div class="sampleinputdiv">
                                            <pre>${tempData[i].sampleinput}</pre>
                                        </div>
                                    </div>  
                                    <div class="pad10">                        
                                        <p>Output</p>
                                        <div class="sampleinputdiv">
                                        <pre>${tempData[i].sampleoutput}</pre>
                                        </div>
                                    </div> 
                                   `
                               );
                            }
                           
                        } else {

                            console.log(data);
                        }
                    } else {
                        console.log(data);
                    }
                } else {
                    alert('Failed to Get Data!!!')
                }
            });
        }

        function gettimedetails() {
            $.get("gettime.php", function (data, status) { 
                if (status.trim() === 'success') {
                    if (data) {
                        let tempData = JSON.parse(data);
                       
                        if (tempData.length > 0) {
                            questions = tempData[0].questions;
                            timer(tempData[0].time);
                            cutoff = tempData[0].cutoff;
                            timer(tempData[0].time);
                        }
                    }
                }
            });
        }

        function timer(min) {
            
            var insertZero = n => n < 10 ? "0" + n : "" + n,
                displayTime = n => n ? time.textContent = insertZero(~~(n / 3600) % 3600) + ":" +
                    insertZero(~~(n / 60) % 60) + ":" +
                    insertZero(n % 60)
                    : submitcodefun(),
                countDownFrom = n => (displayTime(n), setTimeout(_ => n ? sid = countDownFrom(--n)
                    : displayTime(n), 1000)), sid;
            countDownFrom(+(min * 60));

        }
    </script>  


</body>
</html>