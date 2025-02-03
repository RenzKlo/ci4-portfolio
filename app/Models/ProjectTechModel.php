<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectTechModel extends Model
{
    protected $table = 'project_tech';
    protected $primaryKey = ['project_id', 'tech_id'];
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['project_id', 'tech_id'];

    public function addTechToProject($projectId, $techId)
    {
        return $this->insert(['project_id' => $projectId, 'tech_id' => $techId]);
    }
}
