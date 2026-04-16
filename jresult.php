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
    <script>
        setInterval(() => {
            fetch('data.json')
            .then(res => res.json())
            .then(data => {
                document.getElementById("temp").innerText = data.temperature;
                document.getElementById("hum").innerText = data.humidity;
            });
        }, 2000);
</script>

<p>Temperature: <span id="temp"></span></p>
<p>Humidity: <span id="hum"></span></p>
</body>
</html>