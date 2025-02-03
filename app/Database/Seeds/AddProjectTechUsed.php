<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AddProjectTechUsed extends Seeder
{
    public function run()
    {
        $this->db->table('tech_used')->insertBatch([
            ['name' => 'NextJS'],
            ['name' => 'Flutter'],
            ['name' => 'NestJS'],
            ['name' => 'MongoDB'],
            ['name' => 'TypeScript'],
            ['name' => 'React'],
            ['name' => 'Flask'],
            ['name' => 'OpenStreetMap'],
            ['name' => 'NetworkX'],
            ['name' => 'DigitalOcean'],
        ]);

        // Insert project-tech relationships
        $this->db->table('project_tech')->insertBatch([
            ['project_id' => 1, 'tech_id' => 1], // Project A - PHP
            ['project_id' => 1, 'tech_id' => 2], // Project A - PHP
            ['project_id' => 1, 'tech_id' => 3], // Project A - PHP
            ['project_id' => 1, 'tech_id' => 4], // Project A - PHP
            ['project_id' => 1, 'tech_id' => 5], // Project A - PHP
         
            ['project_id' => 2, 'tech_id' => 2], // Project B - Flutter
            ['project_id' => 2, 'tech_id' => 4], // Project B - Flutter
            ['project_id' => 2, 'tech_id' => 7], // Project B - Flutter
            ['project_id' => 2, 'tech_id' => 8], // Project B - Flutter
            ['project_id' => 2, 'tech_id' => 9], // Project B - Flutter
            ['project_id' => 2, 'tech_id' => 10]  // Project B - JavaScript
        ]);
    }
}
