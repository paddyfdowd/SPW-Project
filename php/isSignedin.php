<?php

if (!isset($_SESSION))
{
  session_start();
}

    if(isset($_SESSION["username"])){

        echo "signedin";

    }else{
        echo "failure";
    }

 
?>