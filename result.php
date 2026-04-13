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

    $sql = "select * from Pusers;";
    $result = mysqli_query ($conn, $sql);

    $name = htmlspecialchars($_POST['Name']);
    $age = (int)$_POST['Age'];

    if(!empty($_POST)){
        $sql = "INSERT INTO Pusers (Names,Age) values ('$name',$age);";
        $result = mysqli_query($conn, $sql);
    }

    

    //Display all current users
    $result = $conn->query("SELECT * FROM Pusers;");

    while($row = $result->fetch_assoc()) {
        echo $row['Names'] . "\t";
        echo $row['Age'] . "<br>";
    }

    mysqli_close($conn);
?>

