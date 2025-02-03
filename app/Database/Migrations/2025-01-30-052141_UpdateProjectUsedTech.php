<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateProjectUsedTech extends Migration
{
    public function up()
    {
        $this->forge->addColumn('project_used_techs', [
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'after' => 'id', // Position the column after 'id'
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('project_used_techs', 'name');
    }
}
