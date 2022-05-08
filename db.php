<?php
// Starting the session on whatever page this file is included
    session_start();
    $servername = "localhost";
    $username = "test";
    $password = "pa55word";
    $db = "help_desk";
    $randomNumber = rand(1000,2000);
    // Establish connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Incase connection failes, then the entire script should go down
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }