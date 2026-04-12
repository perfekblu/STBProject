<?php
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
    echo "Connected successfully";

    $sql = "select * from Pusers;";
    $result = mysqli_query ($conn, $sql);

    /*$name = htmlspecialchars($_POST['name']);

    $sql = "INSERT INTO Pusers (names) values ('$name');";
    $result = mysqli_query($conn, $sql);*/
            
    $result = $conn->query("SELECT * FROM Pusers;");

    while($row = $result->fetch_assoc()) {
        echo $row['Names'] . "\t". ;
        echo $row['Age'] . "<br>";
    }

    mysqli_close($conn);
?>

