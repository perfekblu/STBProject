<?php
    $q = $_POST['q'];

    //echo "$q";

    
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

    //$result = $conn->query("SELECT $q, 
    //DATE_FORMAT(created_at, '%H:%i:%s') as time FROM sensor_data ORDER BY id DESC LIMIT 30");

    //$stmt = $mysqli->prepare("SELECT $q FROM sensor_data ORDER BY id DESC LIMIT 30");
    //$stmt->bind_param("s", $q); // "s" = string, "i" = integer, "d" = double
    //$stmt->execute();
    //$result = $stmt->get_result();

    //$sql = "SELECT $q as value,
    //DATE_FORMAT(created_at, '%H:%i:%s') as time FROM sensor_data ORDER BY id ASC LIMIT 1000";
    
    $sql = "SELECT AVG($q) AS value,
    DATE_FORMAT(created_at, '%Y-%m-%d %H:%i') AS time
    FROM sensor_data
    GROUP BY DATE_FORMAT(created_at, '%Y-%m-%d %H:%i')
    ORDER BY id ASC limit 1000";
    $result = mysqli_query($conn, $sql);


    while ($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    //$row = $result->fetch_assoc();

    echo json_encode($data);

    mysqli_close($conn);

?>