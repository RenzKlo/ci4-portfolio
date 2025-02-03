<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectTechUsed extends Model
{
    protected $table = 'tech_used';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['name'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;


}
