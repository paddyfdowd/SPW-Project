<?php

    include('config.php');

    $request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form
    $uname = $request["uname"];
    $pword = $request["pword"];

    //echo $request["message"];
/* 
    $servername = "localhost"; //set the servername
    $username = "bob"; //set the server username
    $password = "password"; // set the server password (you must put password here if your using live server)
    $dbname = "spw"; // set the table name
 */


 
    $mysqli = new mysqli($servername, $username, $password, $dbname);

    if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli->connect_error;
      exit();
    } else{
        
        
    // Set the INSERT SQL data
    $sql = "INSERT INTO unamepword (username  ,password)
    VALUES ('".$uname."', '".$pword."')";

    // Process the query so that we will save the date of birth
    if ($mysqli->query($sql)) {
      echo "user added";
    } else {
      return "Error: " . $sql . "<br>" . $mysqli->error;
    }

    }

    
    $mysqli->close();
    

?>
