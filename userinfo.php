<?php
    $q = intval($_GET['q']);
    
    echo "$q";

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

    
    $sql = "SELECT * FROM users_login WHERE user_id = '".$q."'";
    $result = mysqli_query($conn,$sql);


    while($row = $result->fetch_assoc()) {
        $tab[] = $row["name"], $row["login"];
    }

    echo json_encode($tab);

    mysqli_close($conn);


?>
