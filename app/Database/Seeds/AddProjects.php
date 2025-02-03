<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AddProjects extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Farmacia Hinosa',
                'description' => 'A patient management system (PMS) that stores and manages patient details and appointments of a clinic.',

                'image' => 'assets/images/hinosa.png',
                'start_date' => '2023-04-01',
                'end_date' => '2023-12-01',
            ],
            [
                'name' => 'Publink',
                'description' => 'A mobile application made for commuters to guide them navigate with bus and jeepneys around Iloilo City.',

                'image' => 'assets/images/publink.png',
                'start_date' => '2023-12-01',
                'end_date' => '2024-12-01',
            ],
        ];

        // Using Query Builder
        $this->db->table('projects')->insertBatch($data);
    }
}

