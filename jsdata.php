<?php
    $json = file_get_contents('php://input');
    $data = json_decode($json,true);
    echo "$data";
    //echo json_encode($data);


    $temp = $data['temp'];
    $hum = $data['hum'];

    

?>