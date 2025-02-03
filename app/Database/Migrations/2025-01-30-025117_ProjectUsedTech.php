<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProjectUsedTech extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'project_id' => [
                'type' => 'INT',
                'unsigned' => true,
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('project_id', 'projects', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('project_used_techs');
    }

    public function down()
    {
        $this->forge->dropTable('project_used_techs');
    }
}
