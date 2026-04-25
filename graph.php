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
    DATE_FORMAT(created_at, '%H:%i:%s') as time FROM sensor_data ORDER BY id ASC LIMIT 30");

    $data = [];

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    $hello = {
        "id": "53080",
        "temperature": "26.6277",
        "humidity": "20.662",
        "gas": "639",
        "tvoc": "159",
        "aqi": "2",
        "capacity": "50",
        "created_at": "2026-04-25 03:05:09"
    };

    echo json_encode($hello);

?>