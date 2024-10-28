<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LogoutController extends BaseController
{
    public function __construct()
    {
        $this->session = session();
    }

    public function index()
    {
        $this->session->destroy();

        return redirect()->to('/login');
    }
}
