<?php
namespace App\Controllers;

use IonAuth\Libraries\IonAuth;

class AuthController extends BaseController
{
    protected $ionAuth;

    public function __construct()
    {
        $this->ionAuth = new IonAuth();
    }

    public function login()
    {
        if ($this->ionAuth->loggedIn()) {
            return redirect()->to(site_url('/'));
        }

        return view('auth/login', [
            'title' => 'Přihlášení'
        ]);
    }

    public function attemptLogin()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if ($this->ionAuth->login($email, $password)) {
            return redirect()->to(site_url('/'))->with('success', 'Přihlášení proběhlo úspěšně.');
        }

        return redirect()->back()->with('error', 'Špatný email nebo heslo.');
    }

    public function logout()
    {
        $this->ionAuth->logout();

        return redirect()->to(site_url('/login'))->with('success', 'Byl jsi odhlášen.');
    }
}