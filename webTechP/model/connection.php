<?php

function getConnection()
{
    $server = 'localhost';
    $username = "root";
    $password = "";
    $dbname = 'shohojshiksha';

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if ($conn) {        
        return $conn;
    }else{
        //echo "Failed to connect to MySQL: " . mysqli_connect_error();
        die("Connection failed: " . mysqli_connect_error());
    }
}

?>