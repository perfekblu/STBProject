<?php
    $server = "localhost";
    $username = "aba";
    $password = "abab";
    $database = "STBProject";
    $conn = mysqli_connect($server, $username, $password, $database);
    // Check connection
    if (!$conn) {
        echo "Connection failed";
        die ("Connection failed: {mysqli_connector_error()}");
    }

    $result = $conn->query("SELECT temperature, 
    DATE_FORMAT(created_at, '%H:%i:%s') as time FROM sensor_data ORDER BY id DESC LIMIT 30");

    $data = [];

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    echo json_encode($data);

?>