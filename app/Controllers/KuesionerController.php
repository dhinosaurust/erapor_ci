<?php

namespace App\Controllers;

class KuesionerController extends BaseController
{
    public function index()
    {
        return view('kuesioner');
    }
    
    // untuk penilaian kinerja
    
    public function surveyForm()
    {
        $currentUri = $this->request->getUri()->getPath();
        $data['head'] = view('kuisoner/head_kuisoner');
    
        if ($currentUri === '/form-bio') {
            $data['layout'] = view('penilaian-kinerja/form_data_diri');

        } elseif ($currentUri === '/form-survey') {
            $data['layout'] = view('penilaian-kinerja/form_survey');

        } else {
            $data['layout'] = '<h1>404 - Page Not Found</h1>';
            
        }
    
        return view('penilaian_kinerja', $data);
    }

}