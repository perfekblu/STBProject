<?php
    $json = file_get_contents('php://input');
    $data = json_decode($json,true);
    echo file_get_contents('php://input') . "<br>" . "<br>";

    echo "Temperature: " . $data['temp'] . "<br>";
    echo "Humidity: " . $data["hum"] . "<br>";
?>