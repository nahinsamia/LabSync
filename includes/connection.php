<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "labsync_db";
$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection Failed");
}
?>