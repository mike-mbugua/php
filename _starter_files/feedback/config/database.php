<?php
define('DB_HOST','localhost');
define('DB_USER','michael');
define('DB_NAME','crash-course');
define('DB_PASS','123456');

// creating a connection to the DB
// we can use 2 ways PDO and MYSQLI

$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if ($conn->connect_error) {
    die("Connection Failed" . $conn_error);
}
echo '<p style= color:green;> CONNECTION SUCCESSFUL....</P>';