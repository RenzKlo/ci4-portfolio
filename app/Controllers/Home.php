<?php

namespace App\Controllers;
use App\Models\Blog;

class Home extends BaseController
{
    protected $blog;

    public function index(): string
    {
        return view('home');
    }

    public function projects(): string
    {
        return view('projects');
    }
}


