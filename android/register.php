<?php


require("config.inc.php");

//if posted data is not empty
if (!empty($_POST)) {
   
    if (empty($_POST['clientname']) || empty($_POST['fullname'])|| empty($_POST['location'])|| empty($_POST['address'])
                || empty($_POST['contact'])|| empty($_POST['email'])|| empty($_POST['password'])) {
        
        
        // Create some data that will be the JSON response 
        $response["success"] = 0;
        $response["message"] = "Please Enter Missing fields.";
        
       
        die(json_encode($response));
    }
    
  
            $query = " SELECT 1 FROM tb_clients WHERE emailaddress = :email";
    //now lets update what :user should be
    $query_params = array(
        ':email' => $_POST['email']
    );
    
    //Now let's make run the query:
    try {
        // These two statements run the query against your database table. 
        $stmt   = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch (PDOException $ex) {
       
        $response["success"] = 0;
        $response["message"] = "Database Error1. Please Try Again!";
        die(json_encode($response));
    }
    
   

    $row = $stmt->fetch();
    if ($row) {
       
        $response["success"] = 0;
        $response["message"] = "The Email Address you entered id already in USE";
        die(json_encode($response));
    }
    
  
    $query = "INSERT INTO tb_clients ( client_name,fullname,location,client_address,client_contact,emailaddress,password ) 
             VALUES ( :clientname, :fullname,:location, :address, :contact,:email,:password) ";
    
    //Again, we need to update our tokens with the actual data:
    $query_params = array(
        ':clientname' => $_POST['clientname'],
        ':fullname' => $_POST['fullname'],
        ':location' => $_POST['location'],
        ':address' => $_POST['address'],
        ':contact' => $_POST['contact'],
        ':email' => $_POST['email'],
        ':password' => $_POST['password']
       
    );
    
    //time to run our query, and create the user
    try {
        $stmt   = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch (PDOException $ex) {
        // For testing, you could use a die and message. 
        //die("Failed to run query: " . $ex->getMessage());
        
        //or just use this use this one:
        $response["success"] = 0;
        $response["message"] = "Database Error2. Please Try Again!";
        die(json_encode($response));
    }
    
   
    $response["success"] = 1;
    $response["message"] = "Username Successfully Added!";
    echo json_encode($response);
 
    
} else {
?>
	
	<?php
}

?>
