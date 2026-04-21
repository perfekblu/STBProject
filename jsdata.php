<?php
    header('Content-Type: application/json');
    
    $json = file_get_contents('php://input');
    $data = json_decode($json,true);
    //echo "$json";
    //$hello = "{ "hello": "world" }";
    //$response = json_encode($hello);
    
    echo json_encode($data);

?>