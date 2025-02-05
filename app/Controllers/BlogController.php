<?php

namespace App\Controllers;

use App\Models\BlogModel;

class BlogController extends BaseController
{
    public function index()
    {
        $blogModel = new BlogModel();

        $blogs = $blogModel->findAll();

        // Format the dates
        foreach ($blogs as &$blog) {
            $blog['author_date'] = (new \DateTime($blog['author_date']))->format('F j, Y');
           
        }

        $data['blogs'] = $blogs;


        return view('blogs/index.php', $data);
    }

    public function create()
    {
        return view('blogs/create.php');
    }

    public function store()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'title' => 'required|min_length[3]|max_length[255]',
            'content' => 'required|min_length[10]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return view('blog/create', [
                'validation' => $validation
            ]);
        }

        $blogModel = new BlogModel();
        $blogModel->save([
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'author_date' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to(base_url('blogs/create'))->with('success', 'Blog post created successfully.');
    }
}