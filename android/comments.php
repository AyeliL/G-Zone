<?php

require("config.inc.php");

//initial query
$query = "Select * FROM company";

//execute query
try {
    $stmt   = $db->prepare($query);
    $result = $stmt->execute($query_params);
}
catch (PDOException $ex) {
    $response["success"] = 0;
    $response["message"] = "Database Error!";
    die(json_encode($response));
}

// Finally, we can retrieve all of the found rows into an array using fetchAll 
$rows = $stmt->fetchAll();


if ($rows) {
    $response["success"] = 1;
    $response["message"] = "Company Available!";
    $response["posts"]   = array();
    
    foreach ($rows as $row) {
        $post             = array();
		$post["post_id"]  = $row["cid"];
        $post["username"] = $row["address"];
        $post["title"]    = $row["name"];
        $post["message"]  = $row["type"];
		 $post["status"]  = $row["type"];
     $post["description"]  = $row["profile"];
      
        //update our repsonse JSON data
        array_push($response["posts"], $post);
    }
    
    // echoing JSON response
    echo json_encode($response);
    
    
} else {
    $response["success"] = 0;
    $response["message"] = "No Company Available!";
    die(json_encode($response));
}

?>
