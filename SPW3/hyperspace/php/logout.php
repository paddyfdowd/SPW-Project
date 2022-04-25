<?php

if (!isset($_SESSION))
{
  session_start();
}

$_SESSION["username"] =  "";
session_destroy();

echo "sessionended"

 
?>