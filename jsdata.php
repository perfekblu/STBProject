<?php
    header('Content-Type: application/json');
    $json = file_get_contents('php://input');
    $data = json_decode($json,true);
    //echo "$json";
    $hello = ["temperature": 25, "humidity": 34 ];
    $response = json_encode($hello);
    
    echo json_encode($hello);

?>