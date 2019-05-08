<?php
$conn = null;

$host = 'localhost';
$user = 'root';
$password = '';
$database = '';

function sql_connect()
{
    global $host, $user, $password, $database, $conn;

    $conn = mysqli_connect($host, $user, $password, $database);
}

function sql_query($query)
{
    global $conn;

    return mysqli_query($conn, $query);
}

function sql_fetch($result)
{
    return mysqli_fetch_object($result);
}
