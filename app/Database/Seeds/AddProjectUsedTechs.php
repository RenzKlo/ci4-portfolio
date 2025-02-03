<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AddProjectUsedTechs extends Seeder
{
    public function run()
    {
        $data = [
            [
                'project_id' => 1,
                'name' => 'NextJS'
            ],
            [
                'project_id' => 1,
                'name' => 'MongoDB'
            ],
            [
                'project_id' => 1,
                'name' => 'NestJS'
            ],
            [
                'project_id' => 1,
                'name' => 'TypeScript'
            ],
            [
                'project_id' => 1,
                'name' => 'TailwindCSS'
            ],
            [
                'project_id' => 1,
                'name' => 'React'
            ],
            [
                'project_id' => 1,
                'name' => 'NodeJS'

            ],
            [
                'project_id' => 2,
                'name' => 'Flutter'
            ],
            [
                'project_id' => 2,
                'name' => 'MongoDB'
            ],
            [
                'project_id' => 2,
                'name' => 'OpenstreetMap'
            ],
            [
                'project_id' => 2,
                'name' => 'Flask'
            ],
            [
                'project_id' => 2,
                'name' => 'Python'
            ],

            [
                'project_id' => 2,
                'name' => 'Digital Ocean'

            ],
        ];
        $this->db->table('project_used_techs')->insertBatch($data);

    }
}
