<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProjectLinksTable extends Migration
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
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'link' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('project_id', 'projects', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('project_links');
    }

    public function down()
    {
        $this->forge->dropTable('project_links');
    }
}
