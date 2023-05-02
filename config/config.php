<?php
    try{
    // create constants for database connection
    if(!defined('HOSTNAME')) define("HOSTNAME", "localhost");

    if(!defined('DBNAME')) define("DBNAME", "rems");
    if(!defined('USER')) define("USER", "root");
    if(!defined('PASS')) define("PASS", "");

    $conn = new PDO("mysql:host=".HOSTNAME."; dbname=".DBNAME.";", USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "database connected";
    }catch (PDOException $e) {
    die("Error!: " . $e->getMessage() . "<br/>");
  }

?>