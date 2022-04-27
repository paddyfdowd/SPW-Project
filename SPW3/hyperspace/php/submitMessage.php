<?php

    include('config.php');

    $request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form

    $message = $request["message"];
    $name = $request["name"];
    $email = $request["email"];

 
    $mysqli = new mysqli($servername, $username, $password, $dbname);

    if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli->connect_error;
      exit();
    } else{
        
      $stmt = $mysqli->prepare("INSERT INTO messages(name, email, message) VALUES (?, ?, ?)");

      $stmt->bind_param("sss", $name, $email, $message);
      
      $stmt->execute();

      echo "success";

    }

    
    $mysqli->close();


?>