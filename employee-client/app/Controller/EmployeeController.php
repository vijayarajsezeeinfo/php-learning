<?php

namespace App\Controllers;

class EmployeeController
{
    public function getAllEmployees()
    {
        $url = "http://localhost:8080/employee-data-services/employee";

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if ($response === false) {
            $error = curl_error($ch);

            curl_close($ch);

            http_response_code(500);

            header("Content-Type: application/json");

            echo json_encode([
                "success" => false,
                "message" => $error
            ]);

            return;
        }

        curl_close($ch);

        header("Content-Type: application/json");

        echo $response;
    }


    public function getEmployeeById($id)
    {
        $url = "http://localhost:8080/employee-data-services/employee/" . $id;

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if ($response === false) {
            $error = curl_error($ch);

            curl_close($ch);

            http_response_code(500);

            header("Content-Type: application/json");

            echo json_encode([
                "success" => false,
                "message" => $error
            ]);

            return;
        }

        curl_close($ch);

        header("Content-Type: application/json");

        echo $response;
    }


    public function updateEmployee()
    {
        $data = json_decode(
            file_get_contents("php://input"),
            true
        );

        if ($data === null) {
            http_response_code(400);

            header("Content-Type: application/json");

            echo json_encode([
                "success" => false,
                "message" => "Invalid JSON request"
            ]);

            return;
        }

        $json = json_encode($data);

        $url = "http://localhost:8080/employee-data-services/employee/update";

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_POST, true);

        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json"
        ]);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if ($response === false) {
            $error = curl_error($ch);

            curl_close($ch);

            http_response_code(500);

            header("Content-Type: application/json");

            echo json_encode([
                "success" => false,
                "message" => $error
            ]);

            return;
        }

        curl_close($ch);

        header("Content-Type: application/json");

        echo $response;
    }
}