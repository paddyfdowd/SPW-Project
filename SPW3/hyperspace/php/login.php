<?php
    $request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form

    //echo $request["message"];

    $servername = "localhost"; //set the servername
    $username = "bob"; //set the server username
    $password = "password"; // set the server password (you must put password here if your using live server)
    $dbname = "spw"; // set the table name

    $mysqli = new mysqli($servername, $username, $password, $dbname);

    if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli->connect_error;
      exit();
    } else{
        
        
    // Set the INSERT SQL data
    $sql = "SELECT * FROM test";

    // Process the query so that we will save the date of birth
    $results = $mysqli->query($sql);

    // Fetch Associative array
    $row = $results->fetch_all(MYSQLI_ASSOC);

    // Free result set
    $results->free_result();

    }

    
    $mysqli->close();
    echo json_encode($row);

?>
