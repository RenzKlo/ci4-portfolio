<?php
namespace App\Models;

use CodeIgniter\Model;


class Blog extends Model
{
    protected $table = 'blog';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'content', 'author_date'];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}