<?php
    $sno =  $_GET['question'];
    $filepath =  $_GET['filepath'];
    $finalfilepath =  "http://192.168.1.43:8080/Projects/codetrack/views/user/codingtest/${filepath}";
   
    $text = file_get_contents($finalfilepath 
    );
    $language = explode('.', $finalfilepath);
    
     
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
                        
                        <li>
                            <a href="../result/result.php" class="backlink">Back</a>
                        </li>
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
                            <option value="<?php echo end($language) ?>" selected>
                                <?php echo end($language) ?>
                            </option>
                           
                        </select>
                       

                        </div>
                      
                        <div class="codeouterdiv">
                            <textarea rows="4" cols="50" name="code" id="code">
<?php echo $text; ?>
                            </textarea>
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
    
    <script>
          $(document).ready(function(){
            singleproblemget();
           
        });

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

    </script>

</body>
</html>