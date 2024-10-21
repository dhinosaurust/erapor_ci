<?php

namespace App\Controllers;

class ListPegawai extends BaseController
{
    public function index(): string
    {
        return view('list_pegawai');
    }
}
