<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login(): string
    {
        // Jika sudah login, langsung ke dashboard
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/admin/dashboard');
        }

        return view('auth/login', ['title' => 'Login Admin']);
    }

    public function doLogin()
    {
        // Muat data user statis dari file konfigurasi
        $users = include APPPATH . 'Config/UserData.php';

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if (isset($users[$username]) && $users[$username] === $password) {
            session()->set([
                'username'   => $username,
                'role'       => 'admin',
                'isLoggedIn' => true,
            ]);

            return redirect()->to('/admin/dashboard');
        }

        session()->setFlashdata('error', 'Username atau password salah!');
        return redirect()->to('/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
