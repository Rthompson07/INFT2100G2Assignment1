<?php
function db_connect(){

    $host = "postgres-php"; // Replace with your container name
    $port = 5432;


    $dbname = "INFT2100-F2023"; // Replace with your name
    $user = "admin";
    $password = "password";

    // Connection to postgres using connection string
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";

    try{
        // Create a new PDO instance
        $conn = new PDO($dsn);

        // Set error mode to exception to get exceptions on errors
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;

    }catch (PDOException $e){

        // Handle connection errors
        die("Connection failed " . $e->getMessage());

    }
}
