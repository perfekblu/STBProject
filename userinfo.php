<?php
    $q = intval($_POST['q']);
    
    //echo "$q";

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

   /* while($row = $result->fetch_assoc()) {
        //$tab[] = $row["name"], $row["login"];
        echo "Name: " . $row["name"] . " - Login: " . $row["login"] . "<br>";
    }*/

    $row = $result->fetch_assoc();
    echo json_encode($row);

    mysqli_close($conn);


?>
