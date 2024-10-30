<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\EmployeeModel;

class HomeController extends BaseController
{

    public function __construct()
    {
        $this->employeeModel = new EmployeeModel();
        $this->countPNS = $this->countPNSbyAge(); 
        $this->countPPPK = $this->countPPPKbyAge(); 
        $this->countNonASN = $this->countNonASNbyAge(); 
    }

    public function index()
    {
        if (!$this->isLoggedIn()) {
            return redirect()->to('/login');
        }

        $data = [
            'title' => 'Selamat Datang di Dasbor E-Rapor Pemkot Surabaya',
            'pns' => $this->countPNS,
            'pppk' => $this->countPPPK,
            'non_asn' => $this->countNonASN
        ];

        return view('default', $data);
    }

    public function countPNSbyAge()
    {
        $results = [];  
        $rangeStep = 10;
        $totalMale = 0;  // To sum male counts
        $totalFemale = 0; // To sum female counts
    
        for ($minAge = 18; $minAge <= 60; $minAge += $rangeStep) {
            $maxAge = $minAge + $rangeStep - 1;
    
            $male = $this->employeeModel->countByAgeCategory('pns', 'L', $minAge, $maxAge);
            $female = $this->employeeModel->countByAgeCategory('pns', 'P', $minAge, $maxAge);
    
            $total = $male + $female;
    
            $results[] = [
                'range' => "$minAge - $maxAge",
                'male' => $male,
                'female' => $female,
                'total' => $total
            ];

            // Add to total male and female counts for grand total
            $totalMale += $male;
            $totalFemale += $female;
        }
    
        $maleAbove60 = $this->employeeModel->countByAgeCategory('pns', 'L', 61, null);
        $femaleAbove60 = $this->employeeModel->countByAgeCategory('pns', 'P', 61, null);
        $totalAbove60 = $maleAbove60 + $femaleAbove60;
    
        $results[] = [
            'range' => '> 60',
            'male' => $maleAbove60,
            'female' => $femaleAbove60,
            'total' => $totalAbove60
        ];

         // Add to total male and female counts
        $totalMale += $maleAbove60;
        $totalFemale += $femaleAbove60;
        $grandTotal = $totalMale + $totalFemale;

        // Store vertical totals in the same array
        $results[] = [
            'range' => 'Jumlah',
            'male' => $totalMale,
            'female' => $totalFemale,
            'total' => $grandTotal
        ];
    
        return $results;
    }
    
    public function countPPPKbyAge()
    {
        $results = [];  
        $rangeStep = 10;
        $totalMale = 0;  // To sum male counts
        $totalFemale = 0; // To sum female counts
    
        for ($minAge = 18; $minAge <= 60; $minAge += $rangeStep) {
            $maxAge = $minAge + $rangeStep - 1;
    
            $male = $this->employeeModel->countByAgeCategory('pppk', 'L', $minAge, $maxAge);
            $female = $this->employeeModel->countByAgeCategory('pppk', 'P', $minAge, $maxAge);
    
            $total = $male + $female;
    
            $results[] = [
                'range' => "$minAge - $maxAge",
                'male' => $male,
                'female' => $female,
                'total' => $total
            ];

            // Add to total male and female counts for grand total
            $totalMale += $male;
            $totalFemale += $female;
        }
    
        $maleAbove60 = $this->employeeModel->countByAgeCategory('pppk', 'L', 61, null);
        $femaleAbove60 = $this->employeeModel->countByAgeCategory('pppk', 'P', 61, null);
        $totalAbove60 = $maleAbove60 + $femaleAbove60;
    
        $results[] = [
            'range' => '> 60',
            'male' => $maleAbove60,
            'female' => $femaleAbove60,
            'total' => $totalAbove60
        ];

         // Add to total male and female counts
        $totalMale += $maleAbove60;
        $totalFemale += $femaleAbove60;
        $grandTotal = $totalMale + $totalFemale;

        // Store vertical totals in the same array
        $results[] = [
            'range' => 'Jumlah',
            'male' => $totalMale,
            'female' => $totalFemale,
            'total' => $grandTotal
        ];
    
        return $results;
    }
    
    public function countNonASNbyAge()
    {
        $results = [];  
        $rangeStep = 10;
        $totalMale = 0;  // To sum male counts
        $totalFemale = 0; // To sum female counts
    
        for ($minAge = 18; $minAge <= 60; $minAge += $rangeStep) {
            $maxAge = $minAge + $rangeStep - 1;
    
            $male = $this->employeeModel->countByAgeCategory('non asn', 'L', $minAge, $maxAge);
            $female = $this->employeeModel->countByAgeCategory('non asn', 'P', $minAge, $maxAge);
    
            $total = $male + $female;
    
            $results[] = [
                'range' => "$minAge - $maxAge",
                'male' => $male,
                'female' => $female,
                'total' => $total
            ];

            // Add to total male and female counts for grand total
            $totalMale += $male;
            $totalFemale += $female;
        }
    
        $maleAbove60 = $this->employeeModel->countByAgeCategory('non asn', 'L', 61, null);
        $femaleAbove60 = $this->employeeModel->countByAgeCategory('non asn', 'P', 61, null);
        $totalAbove60 = $maleAbove60 + $femaleAbove60;
    
        $results[] = [
            'range' => '> 60',
            'male' => $maleAbove60,
            'female' => $femaleAbove60,
            'total' => $totalAbove60
        ];

         // Add to total male and female counts
        $totalMale += $maleAbove60;
        $totalFemale += $femaleAbove60;
        $grandTotal = $totalMale + $totalFemale;

        // Store vertical totals in the same array
        $results[] = [
            'range' => 'Jumlah',
            'male' => $totalMale,
            'female' => $totalFemale,
            'total' => $grandTotal
        ];
    
        return $results;
    }

    private function isLoggedIn():bool
    {
        if(session()->get('logged_in')){
            return true;
        }

        return false;
    }

}
