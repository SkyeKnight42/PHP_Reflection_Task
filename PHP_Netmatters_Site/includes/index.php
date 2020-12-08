<?php
    include 'database_connection.inc.php';

    $conn = OpenConnection();

    echo "Connected Successfully";

    CloseConnection($conn)
?>