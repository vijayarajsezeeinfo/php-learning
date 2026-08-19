<?php

require_once __DIR__ . "/../Controller/EmployeeController.php";

use App\Controllers\EmployeeController;

$controller = new EmployeeController();

$method = $_SERVER["REQUEST_METHOD"];
$uri = $_SERVER["REQUEST_URI"];

// Remove query string
$uri = parse_url($uri, PHP_URL_PATH);


// GET /employee
if ($method === "GET" && $uri === "/employee") {

    $controller->getAllEmployees();

}


// GET /employee/{id}
elseif ($method === "GET" && preg_match("#^/employee/([0-9]+)$#", $uri, $matches)) {

    $id = $matches[1];

    $controller->getEmployeeById($id);

}


// POST /employee/update
elseif ($method === "POST" && $uri === "/employee/update") {

    $controller->updateEmployee();

}


// Invalid route
else {

    http_response_code(404);

    header("Content-Type: application/json");

    echo json_encode([
        "success" => false,
        "message" => "Route not found"
    ]);
}