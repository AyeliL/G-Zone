<?php

mysql_connect('localhost','amccargo_guser','gzone1234');
  $db= mysql_select_db("amccargo_gzone");
  
  $password=$_POST["password"];
  $username=$_POST["username"];
  
  
   
  if (!empty($_POST)) {
  if (empty($_POST['username']) || empty($_POST['password'])) {
  // Create some data that will be the JSON response 
          $response["success"] = 0;
          $response["message"] = "All fields are required";
       
          die(json_encode($response));
      }
         $query = " SELECT * FROM tb_clients WHERE emailaddress = '$username' and password='$password'";
      
     $sql1=mysql_query($query);
  $row = mysql_fetch_array($sql1);
  
  if (!empty($row)) {
  
    $client_id = $row['client_id'];
   
       $response["success"] = 1;
       $response["message"] = "$client_id";
         die(json_encode($response));
  }
  else{
   
  $response["success"] = 0;
          $response["message"] = "Invalid Login Credentials";
  die(json_encode($response));
  }
      
   
   
  }
  else{
   
  $response["success"] = 0;
          $response["message"] = " All Fields are required ";
  die(json_encode($response));
  }
   
  mysql_close();
  ?>


