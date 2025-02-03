<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProjectTechUsedTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'INT', 'constraint' => 11, 'auto_increment' => true],
            'name' => ['type' => 'VARCHAR', 'constraint' => 100],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tech_used');
    }

    public function down()
    {
        $this->forge->dropTable('tech_used');
    }
}
