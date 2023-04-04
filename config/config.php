<?php
    try{
    // create constants for database connection
    define("HOSTNAME", "localhost");
    define("DBNAME", "rems");
    define("USER", "root");
    define("PASS", "");

    $conn = new PDO("mysql:host=".HOSTNAME."; dbname=".DBNAME.";", USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "database connected";
    }catch (PDOException $e) {
    die("Error!: " . $e->getMessage() . "<br/>");
  }

?>