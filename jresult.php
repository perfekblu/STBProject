<?php
$json = file_get_contents("php//:input");
$data = json_decode($json, true);
?>

<!DOCTYPE html>
<html>
<head>
    <title>ESP32 Data</title>
</head>
<body>
    <h1>Sensor Data</h1>
    <p>Temperature: <?php echo $data['temperature']; ?> °C</p>
    <p>Humidity: <?php echo $data['humidity']; ?> %</p>
</body>
</html>