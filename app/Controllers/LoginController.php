<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{

    protected $model;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {
        if($this->isLoggedIn()){
            return redirect()->to(base_url('/'));
        }

        return view('login');
    }

    private function isLoggedIn(): bool
    {
        if (session()->get('logged_in')) {
            return true;
        }

        return false;
    }

    public function attemptLogin()
    {
        $data = $this->request->getPost(['username', 'password']);

        if( !$this->validateData($data, [
            'username' => 'required',
            'password' => 'required'
        ])){
            return $this->index();
        }

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $credentials = ['username' => $username];

        $user =  $this->model->where($credentials)->first();
        
        if (!$user) {
            session()->setFlashdata('error', 'Username atau Password Anda Salah.');
            return redirect()->back();
        }

        // password enkripsi
        // $passwordCheck = password_verify($password, $user['password']);

        if ($password !== $user['password']) {
            session()->setFlashdata('error', 'Username atau Password Anda Salah.');
            return redirect()->back();
        }

        $userData = [
            'username' => $user['username'],
            'logged_in' => TRUE
        ];

        session()->set($userData);
        return redirect()->to('/');

        // var_dump($username);
        // var_dump($password);
        // var_dump($user);
        // echo '<br>';
        // var_dump($password == $user['password']);
    }
}