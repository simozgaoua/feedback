<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'simo');
define('DB_PASS', '123SimoZgaoua');
define('DB_NAME', 'php_dev');

//creat connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//check connection 
if ($conn->connect_error) {
    die('connection failed ' . $conn->connect_error);
}

echo 'connected';
