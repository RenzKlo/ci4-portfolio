<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectsModel extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['name', 'description', 'image', 'start_date', 'end_date'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    public function getTechUsed($projectId)
    {
        return $this->db->table('project_tech')
            ->select('tech_used.*')
            ->join('tech_used', 'tech_used.id = project_tech.tech_id')
            ->where('project_tech.project_id', $projectId)
            ->get()->getResultArray();
    }

}
