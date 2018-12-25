<?php
	include_once('../../../config/connection.php');
	$sql = "SELECT  name, department ,email,mobileno,course,collegeid,SUM(App_Question) AS 'App_Question', SUM(App_Attend) AS 'App_Attend', SUM(App_Notattend) AS 'App_Notattend', SUM(App_Result) AS 'App_Result', SUM(App_Cutoff) AS 'App_Cutoff',SUM(Tech_Question) AS 'Tech_Question', SUM(Tech_Attend) AS 'Tech_Attend',SUM(Tech_Notattend) AS 'Tech_Notattend', SUM(Tech_Result) AS 'Tech_Result', SUM(Tech_Cutoff) AS 'Tech_Cutoff',codingstatus
    FROM(SELECT  name, department,email,mobileno,course,collegeid,questions AS 'App_Question', attend AS 'App_Attend', notattend AS 'App_Notattend', result AS 'App_Result', cutoff AS 'App_Cutoff',0 AS 'Tech_Question', 0 AS 'Tech_Attend',0 AS 'Tech_Notattend', 0 AS 'Tech_Result',0 AS 'Tech_Cutoff',codingstatus AS 'codingStatus' FROM result WHERE testtype = 'Apptitude' UNION ALL SELECT  name, department,email,mobileno,course,collegeid, 0 AS 'App_Question', 0 AS 'App_Attend', 0 AS 'App_Notattend',0 AS 'App_Result',0 AS 'App_Cutoff',questions AS 'Tech_Question', attend AS 'Tech_Attend', notattend AS 'Tech_Notattend', result AS 'Tech_Result', cutoff AS 'Tech_Cutoff',codingstatus AS 'codingStatus'
        FROM result WHERE testtype = 'Technical') AS A GROUP BY mobileno,email,name";
	$result=mysqli_query($con,$sql) or die(mysqli_error());

	
	while($rows=mysqli_fetch_array($result)){
		$data[] = $rows;
	}
	if(isset($data)){
		echo json_encode($data);	
	}else{
		$oVal = (object)[];
		echo json_encode($oVal);
	}	
?>

