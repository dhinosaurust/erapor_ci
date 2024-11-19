<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class HasilPenilaianController extends BaseController
{
    public function index()
    {
        return view('hasil_penilaian');
    }
}
