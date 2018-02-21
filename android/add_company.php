<?php


 
        $host='localhost';
	$uname='amccargo_guser';
	$pwd='gzone1234';
	$db="amccargo_gzone";

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
 	mysql_select_db($db,$con) or die("db selection failed");
	 
	
    $company_id = $_REQUEST['company_id'];
    $client_id = $_REQUEST['client_id'];
   

	
           mysql_query("INSERT INTO client_choice(client_id, company_id) VALUES('$client_id','$company_id')");

	

	print(json_encode($flag));
	mysql_close($con);
?>