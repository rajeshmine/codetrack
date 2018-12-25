<?php
    $language=$_POST["language"];
    switch($language)
        {
            case "c":
            {
                include("../../../compilers/c.php");
                break;
            }
            case "cpp":
            {
                include("../../../compilers/cpp.php");
                break;
            }
            case "java":
            {
                include("../../../compilers/java.php");
                break;
            }
            case "python":
            {
                include("../../../compilers/python.php");
                break;
            }
           
        }

?>