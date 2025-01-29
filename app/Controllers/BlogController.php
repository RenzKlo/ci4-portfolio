<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Blog;
class BlogController extends BaseController
{
    public function index()
    {
        $blogModel = new Blog();
        $blogs = $blogModel->findAll();

        // Format the date
        foreach ($blogs as &$blog) {
            $blog['author_date'] = date('F j, Y', strtotime($blog['author_date']));
        }

        return view('blog', ['blogs' => $blogs]);
    }
}
