<?php

$data = json_decode(file_get_contents("php://input"),true);
// print_r($data);

$name = $data["name"];
$salary = $data["salary"];

header("Content-Type: application/json");
http_response_code(201);
$response = [
    "success"=>true,
    "message"=>"Employee received",
    "data"=>[
        "name"=>$name,
        "salary"=>$salary
    ]
];

echo json_encode($response);

?>