<?php

namespace App\Controllers;

use App\Models\UserModel;

class HomeController extends BaseController
{
    public function index()
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('/login');
        }

        return view('default');
    }

    private function isLoggedIn():bool
    {
        if(session()->get('logged_in')){
            return true;
        }

        return false;
    }

    // jumlah asn dan non-asn based on gender & usia

    // jumlah pns based on gender & usia

    // 
}
