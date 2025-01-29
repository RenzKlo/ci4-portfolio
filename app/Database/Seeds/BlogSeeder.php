<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run()
    {
        $data = array(

            'title' => 'My second Post',
            'content' => 'This is my first blog post. I hope you enjoy it.',
            'author_date' => '2025-01-28 02:08:51',

        );

        $data = [
       
        ];
        $this->db->table('blog')->insert($data);
    }
}
