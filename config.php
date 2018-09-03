<?php 

// ini_set("display_errors", "1");
//     error_reporting(E_ALL);

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'test';
    
    $conn = new mysqli($host, $user, $pass, $db);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    ?>