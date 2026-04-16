<?php
    $name = htmlspecialchars($_POST['name']);
    $age = (int)$_POST['age'];

    echo "$name" . "\t";
    echo "$age" . "<br>";
?>