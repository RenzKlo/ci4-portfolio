<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProjectTechTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'project_id' => ['type' => 'INT', 'unsigned' => true,],
            'tech_id' => ['type' => 'INT', 'constraint' => 11],
        ]);

        $this->forge->addKey(['project_id', 'tech_id'], true);
        $this->forge->addForeignKey('project_id', 'projects', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('tech_id', 'tech_used', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('project_tech');
    }

    public function down()
    {
        $this->forge->dropTable('project_tech');
    }
}
