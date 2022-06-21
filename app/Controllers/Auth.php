<?php
namespace App\Controllers;
use App\Models\LoginModel;

class Auth extends BaseController
{
    protected $login;
    public function __construct()
    {
        $this->login = new LoginModel();
    }
    public function index()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        if (password_verify($username == '' && $password == '')) {
            echo view('login/index');
        } else {

            return $this->_login($username, $password);
        }
        
    }

    private function _login($username, $password)
    {
        $user = $this->login->getLogin($username, $password);
        if ($user) {
            session()->set([
                'username' => $user['username']
            ]);
            return redirect()->to('/portofolio');
        } else {
            session()->setFlashdata('pesan', 'Username dan Password Salah');
            return redirect()->to('auth');
        }
        
    }
}