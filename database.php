<?php

function connectDB() {
    $servername = "localhost";
    $username = "sendo01";
    $password = "elaTV2dfU/V)1ZbU";
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