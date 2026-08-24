<?php

namespace App\Controllers;

use App\Services\LoginService;

class LoginController extends BaseController
{
    protected LoginService $loginService;

    public function __construct()
    {
        $this->loginService = new LoginService();
    }

    //open login form
    public function loginPage()
    {
        // return 'Login Page Working';
        return view('site/login/login');
    }

    public function login()
    {
        // $data = $this->request->getJSON(true);
        // $userCode = $data['userCode'];
        // $username = $data['username'];
        // $password = $data['password'];
        // $namespaceCode = $data['namespaceCode'];
        $userCode = $this->request->getPost("userCode");
        $username = $this->request->getPost("username");
        $password = $this->request->getPost("password");
        $namespaceCode = $this->request->getPost("namespaceCode");

        $response = $this->loginService->login($userCode, $username, $password, $namespaceCode);
        return $this->response->setJSON($response);
    }

    // public function login(){
    //         return 'Login Controller Working';
    // }

}
