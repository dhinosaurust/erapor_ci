<?php

namespace App\Controllers;

use App\Models\UserModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class RegisterController extends BaseController
{
    protected $model;
    
    public function __construct()
    {
        $this->model = new UserModel();
        $this->helpers = ['from', 'url'];
    }

    public function index()
    {
        $data = [
            'title' => 'Register | Aplikasi eRapor BKPSDM Surabaya',
        ];

        return view('register', $data);
    }

    public function store()
    {
        $data = $this->request->getPost(['username', 'password']);

        if(!this->validateData($data, $this->model->validationRules)){
            return $this->index();
        }

        $user = $this->validator->getValidated();

        $save = $this->model->save($user);

        if ($save) {
            session()->setFlashdata('success', 'Register Berhasil!');
            return redirect()->to(base_url('login'));
        } else {
            session()->setFlashdata('error', $this->model->errors());
            return redirect()->back();
        }
    }

}
