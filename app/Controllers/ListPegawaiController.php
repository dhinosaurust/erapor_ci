<?php

namespace App\Controllers;

use App\Models\EmployeeModel;

class ListPegawaiController extends BaseController
{
    protected $employeeModel;

    public function __construct()
    {
        $this->employeeModel = new EmployeeModel();
        $this->helpers = ['form', 'url'];
        $this->session = session();
    }

    public function listEmployee()
    {
        // search

        $keyword = $this->request->getVar('keyword') ?? $this->session->get('keyword');

        if(isset($keyword)){

            // $this->session->has('category') ? $this->session->remove('category') : '' ;

            $this->session->set('keyword', $keyword);
            $employees = $this->employeeModel->search($keyword);
        } else {
            $employees = $this->employeeModel;
        }

        // filter by kategori

        $category = $this->request->getVar('category') ?? $this->session->get('category');

        if(isset($category)){

            $this->session->set('category', $category);
            $employees = $this->employeeModel->categories($category);
        } else {
            $employees = $this->employeeModel;
        }
        

        // pagination

        $pageEmployee = $this->request->getVar('page_employee') ? $this->request->getVar('page_employee') : 1;

        $data = [
            'data_pegawai' => $employees->paginate(10, 'employee'),
            'pager' => $this->employeeModel->pager,
            'pageEmployee' => $pageEmployee
        ];

        if (!$this->isLoggedIn()) {
            return redirect()->to('/login');
        }

        return view('list_pegawai', $data);
    }

    public function clearFilter()
    {

        if($this->session->has('category')) {
            $this->session->remove('category');

        }  

        return redirect()->to('/list-pegawai');
    }

    public function clearSearch(){
        
        if($this->session->has('keyword')){
            $this->session->remove('keyword');

        }

        return redirect()->to('/list-pegawai');
    }

    private function isLoggedIn():bool
    {
        if(session()->get('logged_in')){
            return true;
        }

        return false;
    }


}
