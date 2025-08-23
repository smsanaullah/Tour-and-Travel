<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "tours_management";

$connection = new mysqli($host, $user, $pass, $dbname);

if ($connection->connect_error) {
    die("Database connection failed: " . $connection->connect_error);
}

$connection->set_charset("utf8");

$GLOBALS['connection'] = $connection;