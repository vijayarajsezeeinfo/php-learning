<?php

namespace App\Services;

class LoginService
{
    public function login(
        string $userCode,
        string $username,
        string $password,
        string $namespaceCode
    ) {

        $data = [
            "userCode" => $userCode,
            "username" => $username,
            "password" => $password,
            "namespaceCode" => $namespaceCode
        ];

        $ch = curl_init("http://localhost:8080/library-management-services/auth/login");

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json"]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if ($response === false) {
            $error = [
                'curl_error' => curl_error($ch),
                'curl_errno' => curl_errno($ch)
            ];
            curl_close($ch);
            return $error;
        }
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        // return $response;
        return [
            'http_code' => $httpCode,
            'response' => $response
        ];
    }

    // public function login(
    //     string $userCode,
    //     string $username,
    //     string $password,
    //     string $namespaceCode
    // ) {
    //     return [
    //         'status' => 1,
    //         'message' => 'Service Working'
    //     ];
    // }
}
