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
    echo "Connected successfully"."<br>";

    
    $json = file_get_contents('php://input');
    $data = json_decode($json,true);
    echo file_get_contents('php://input') . "<br>" . "<br>";
    echo "$data";

    $temp = $data['temp'];
    $hum = $data['hum'];

    //$temp = (int)$_POST['temp'];
    //$hum = (int)$_POST['hum'];

    /*if(!empty($_POST)){
        $sql = "INSERT INTO sensor_test (temperature,humidity) values ('$temp','$hum');";
        $result = mysqli_query($conn, $sql);
    }*/

    /*if(!empty($data)){
        $sql = "INSERT INTO sensor_test (temperature,humidity) values ('$temp','$hum');";
        $result = mysqli_query($conn, $sql);
    }*/

    $sql = "INSERT INTO sensor_test (temperature,humidity) values ('$temp','$hum');";
    $result = mysqli_query($conn, $sql);
    
    //Display all current users
    $result = $conn->query("SELECT * FROM sensor_test ORDER BY id DESC LIMIT 1;");

    /*while($row = $result->fetch_assoc()) {
        echo $row['Names'] . "\t";
        echo $row['Age'] . "<br>";
    }*/

    $row = $result->fetch_assoc();

    echo $row['temperature'] . "°C" . "<br>";
    echo $row['humidity'] . "%" . "<br>";
    echo $row['created_at'] . "<br>";

    mysqli_close($conn);

    //echo "Temperature: " . $data['temp'] . "<br>";
    //echo "Humidity: " . $data["hum"] . "<br>";
?>