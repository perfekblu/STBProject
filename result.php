!<DOCTYPE html>
<html>
    <head>
        <?php
            $server = "localhost";
            $username = "aba";
            $password = "abab";
            $database = "STBProject";
            $conn = mysqli_connect($server, $username, $password, $database);
            // Check connection
            if (!$conn) {
                die ("Connection failed: {mysqli_connector_error()}");
            }
            echo "Connected successfully";

            $sql = "select * from Pusers;";
            $result = mysqli_query ($conn, $sql);

            $name = htmlspecialchars($_POST['name']);
        ?>
    </head>
    <body>
        <?php
            $sql = "INSERT INTO Pusers (names) values ('$name');";
            $result = mysqli_query($conn, $sql);
            
            echo "$name";

            mysqli_close($conn);
        ?>
    </body>
</html>
