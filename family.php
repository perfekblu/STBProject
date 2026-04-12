<?php
    $q = intval($_GET['q']);

    $con = mysqli_connect('localhost','aa','abab');
    if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"STBProject");
    $sql="SELECT * FROM user WHERE id = '".$q."'";
    $result = mysqli_query($con,$sql);

    echo "<table>
    <tr>
    <th>Names</th>
    <th>Age</th>
    </tr>";
    while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Names'] . "</td>";

    echo "<td>" . $row['Age'] . "</td>";

    }
    echo "</table>";

    mysqli_close($con);
?>