<?php
$data = file_get_contents("data.json");
$json = json_decode($data, true);
?>

<!DOCTYPE html>
<html>
<head>
    <title>ESP32 Data</title>
</head>
<body>
    <h1>Sensor Data</h1>
    <p>Temperature: <?php echo $json['temperature']; ?> °C</p>
    <p>Humidity: <?php echo $json['humidity']; ?> %</p>
</body>
</html>