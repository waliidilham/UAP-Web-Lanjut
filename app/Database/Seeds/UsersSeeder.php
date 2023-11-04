<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id'  => 1,
                'email'  =>  'admin@evoting.com',
                'username'  =>  'admin',
                'password_hash'  =>  '$2y$10$ZalujJkIc3rY/3FVq5ZaQunYrOz7dCqxwSInZKNpwmo5CVOJn1cCK',
                'active' => 1,

            ],
            [
                'id'  => 2,
                'email'  =>  'petugas@evoting.com',
                'username'  =>  'petugas',
                'password_hash'  =>  '$2y$10$Ud6/MyjrfVGQxigf4YSCsuGNHl8FqPt0.fOCv4SFAjmQDe7hb5NAK',
                'active' => 1,
            ],
            [
                'id'  => 3,
                'email'  =>  'pemilih@evoting.com',
                'username'  =>  'pemilih',
                'password_hash'  =>  '$2y$10$kf3nbilWFhlmTH3YSfnwhu6YdV4IgFxc9orCZKJ3mOwD0Fc9AWW96',
                'active' => 1,
            ],
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
