<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ProjectsModel;

class ProjectController extends BaseController
{
    public function index()
    {
        $projectsModel = new ProjectsModel();
        $projects = $projectsModel->findAll();

        foreach ($projects as &$project) {
            $project['start_date'] = date('F Y', strtotime($project['start_date']));
            $project['end_date'] = date('F Y', strtotime($project['end_date']));
            $project['technologies'] = $projectsModel->getTechUsed($project['id']);
        }

        return view('projects', ['projects' => $projects]);
    }
}
