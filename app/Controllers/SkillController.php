<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SkillController extends BaseController
{
    public function index()
    {
        return view('skills');
    }
}


