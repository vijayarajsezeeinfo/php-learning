<?php

namespace App\Controllers;

class RegisterController extends BaseController
{

    public function register()
    {
        if ($this->request->getMethod() == "POST") {
            $data = [
                "name" => $this->request->getPost("name"),
                "age" => $this->request->getPost("age"),
                "gender" => $this->request->getPost("gender"),
                "java" => $this->request->getPost("java"),
                "sql" => $this->request->getPost("sql"),
                "php" => $this->request->getPost("php")
            ];
            return view("site/register/register", $data);
        } else if ($this->request->getMethod() == "GET") {
            return view("site/register/register");
        }
    }
}
