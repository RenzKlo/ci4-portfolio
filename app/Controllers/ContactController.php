<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\MessageModel;

class ContactController extends BaseController
{
    public function index()
    {
        return view('contact');
    }
    public function submit()
    {
        helper(['form']);
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'message' => 'required|min_length[10]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return view('contact', [
                'validation' => $validation,
            ]);
        }

        // Process the form data
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $message = $this->request->getPost('message');

        $messageModel = new MessageModel();
        $messageModel->save([
            'name' => $name,
            'email' => $email,
            'message' => $message,
        ]);

        return redirect()->to(base_url('/contact'))->with('success', 'Your message has been sent successfully.');
    }

    public function viewList()
    {

        $messageModel = new MessageModel();
        $data['messages'] = $messageModel->findAll();

        return view('contact/viewList', $data);
    }
}
