<?php

$servername = "localhost"; // replace with your server name if different
$username = "root"; // replace with your username if different
$password = ""; // replace with your password if different
$dbname = "pharmeasy"; // replace with your database name if different

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
