<?php


 
        $host='localhost';
	$uname='amccargo_guser';
	$pwd='gzone1234';
	$db="amccargo_gzone";

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
 	mysql_select_db($db,$con) or die("db selection failed");
	 
	
    $company_id = $_REQUEST['company_id'];
    $client_id = $_REQUEST['client_id'];
    $details = $_REQUEST['details']; 

	
     mysql_query("INSERT INTO client_requests(client_id, company_id,request_details) VALUES('$client_id','$company_id', '$details')");

	

	print(json_encode($flag));
	mysql_close($con);
?>