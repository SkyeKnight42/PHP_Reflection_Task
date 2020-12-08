<?php

function OpenConnection() {
    $dbServername = "localhost"; // This is local host as we are using Xampp
    $dbUsername = "root"; // This is root as we are using Xampp
    $dbPassword = ""; // Null is Xampp default.
    $dbName = "netmatters_news_database";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die ("Connect failed: %s/n" . $conn -> error); // connection

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

function CloseConnection($conn) {
    $conn -> close();
}

?>