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
        return view('blogs/create');
    }

    public function viewBlogPost($id)
    {
        $blogModel = new BlogModel();
        $blog = $blogModel->find($id);

        if (!$blog) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $blog['author_date'] = (new \DateTime($blog['author_date']))->format('F j, Y');

        $data['blog'] = $blog;

        return view('blogs/viewBlogPost', $data);
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
    public function edit($id)
    {
        $model = new BlogModel();
        $data['blog'] = $model->find($id);

        return view('blogs/editBlogPost', $data);
    }

    public function update($id)
    {
        $model = new BlogModel();
        $model->update($id, [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
        ]);

        return redirect()->to(base_url('/blogs/' . $id))->with('success', 'Blog post updated successfully.');
    }

    public function delete($id)
    {
        $model = new BlogModel();
        $model->delete($id);

        return redirect()->to('/blogs');
    }
}