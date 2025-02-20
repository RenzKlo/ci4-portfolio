<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TechStacks extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'filter' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'svg' => [
                'type' => 'TEXT',
            ],
        ]);
        $this->forge->addKey('id', true);

        $this->forge->createTable('techstacks');

    }

    public function down()
    {
        $this->forge->dropTable('techstacks');
    }
}
