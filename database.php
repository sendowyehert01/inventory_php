<?php

function connectDB() {
    $servername = "localhost";
    $username = "sendow01";
    $password = "";
    $database = 'inventory';
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$database);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
    // echo "Connected successfully"; 
};

?>