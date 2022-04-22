<?php
    $request = $_REQUEST; //a PHP Super Global variable which used to collect data after submitting it from the form

    $uname = $request["uname"];
    $pword = $request["pword"];

    $servername = "localhost"; //set the servername
    $username = "bob"; //set the server username
    $password = "password"; // set the server password (you must put password here if your using live server)
    $dbname = "spw"; // set the table name

    $mysqli = new mysqli($servername, $username, $password, $dbname);

    if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli->connect_error;
      exit();
    } else{
        


      $stmt = $mysqli->prepare("SELECT hashpassword from users WHERE username = ?");

      $stmt->bind_param("s",$uname);
        
      $stmt->execute();
        
      $result = $stmt->get_result();
      
      $row = $result->fetch_assoc(); // fetch data
      
      $returnedhash = $row["hashpassword"];
      if (password_verify($pword,$returnedhash)){

        echo "Found Match";

      }else{
        echo "no match";
      }
    /* // Set the INSERT SQL data
    $sql = "SELECT * FROM test";

    // Process the query so that we will save the date of birth
    $results = $mysqli->query($sql);

    // Fetch Associative array
    $row = $results->fetch_all(MYSQLI_ASSOC);

    // Free result set
    $results->free_result(); */

    }

    
    $mysqli->close();
    //echo json_encode($row);

?>
