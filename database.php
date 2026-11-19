<?php
//setup database environment
$host = 'db';
$port = '3306';
$db = 'practicedb';
$user = 'king';
$pass = 'userpassword';

// create connection with database
$conn = new mysqli($host, $user, $pass, $db, $port);
//new mysqli() build in php that open connection to a database and return a connection

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$conn->connection_error is a built in property on the mysqli object that holds an error description if the login fails
//die("..") is a buld in function that immediately halts scripts execution
?>