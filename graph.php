<?php
    $q = $_POST['q'];

    echo "$q";

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

    //$result = $conn->query("SELECT gas, 
    //DATE_FORMAT(created_at, '%H:%i:%s') as time FROM sensor_data ORDER BY id DESC LIMIT 1");
    $sql = "SELECT $q as value,
    DATE_FORMAT(created_at, '%H:%i:%s') as time FROM sensor_data ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $sql);

    $row = $result->fetch_assoc();

    echo json_encode($row);

    mysqli_close($conn);

?>