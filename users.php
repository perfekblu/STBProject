<?php
    //Connect to database
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
    //echo "Connected successfully"."<br>";

    
    $json = file_get_contents('php://input');
    $data = json_decode($json,true);

    $uid = $data['uid'];

    if (!$uid){
        die("No UID");
    }

    $stmt = $conn->prepare("SELECT id, name FROM users WHERE rfid_uid = ?");
    $stmt->bind_param("s", $uid);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if (!$user) {
        die("Unknown card");
    }

    $stmt = $conn->prepare("INSERT INTO users_login (user_id,name) VALUES (?,?)");
    $stmt->bind_param("i", $user['id']);
    $stmt->bind_param("s", $user['name']);
    $stmt->execute();

    echo "Login recorded for " . $user['name'];

    $conn->close();

?>
