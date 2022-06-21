<?php
namespace App\Controllers;

use App\Models\DataDiri;

class Aboute extends BaseController
{
    public function __construct()
    {
       $this->data = new DataDiri();
    }
    
    public function index()
    {
        echo view('portofolio/cv_dua', ['data' => $this->data->first()]);
    }

    
    public function auth()
    {
        echo view('about/auth');
    }
    public function simpan()
    {
        $this->data->save(
            [
                'username' => $this->request->getVar('username'),
                'password' => $this->request->getVar('password'),

            ]
        );
        return redirect()->to('/Aboute/auth');
    }
}