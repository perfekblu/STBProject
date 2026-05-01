<?php
    $q = intval($_GET['q']);
    
    echo "allo";

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

    echo "<table>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
    <th>Hometown</th>
    <th>Job</th>
    </tr>";
    while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['login'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";

    mysqli_close($con);


?>
