<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Blog extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type' => 'INT',
                    'unsigned' => true,
                    'auto_increment' => true,
                ],
                'title' => [
                    'type' => 'VARCHAR',
                    'constraint' => 255,
                ],
                'content' => [
                    'type' => 'TEXT',
                ],
                'author_date' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ],
                'created_at timestamp default current_timestamp',
                'updated_at timestamp default current_timestamp on update current_timestamp',

            ],
        );

        $this->forge->addKey('id', true);
        $this->forge->createTable('blog');
    }

    public function down()
    {
        $this->forge->dropTable('blog');
    }
}
