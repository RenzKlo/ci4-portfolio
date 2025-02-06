<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function register()
    {
        return view('auth/register');
    }


    public function loginSubmit()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'email' => 'required|valid_email',
            'password' => 'required|min_length[6]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return view('login', [
                'validation' => $validation
            ]);
        }

        $userModel = new UserModel();
        $user = $userModel->where('email', $this->request->getPost('email'))->first();

        if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
            session()->set([
                'isLoggedIn' => true,
                'userId' => $user['id'],
                'userName' => $user['name']
            ]);

            return redirect()->to(base_url('/'));
        }

        return redirect()->to(base_url('/login'))->with('error', 'Invalid login credentials.');
    }

    public function registerSubmit()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required|min_length[3]|max_length[255]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[6]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return view('register', [
                'validation' => $validation
            ]);
        }

        $userModel = new UserModel();
        $userModel->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ]);

        return redirect()->to(base_url('/register'))->with('success', 'Registration successful.');
    }


    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/login'));
    }
}
