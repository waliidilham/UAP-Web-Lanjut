<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AuthGroups extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'  => 'administrator',
                'description'  =>  'Administrator'
            ],
            [
                'name'  => 'petugas',
                'description'  =>  'Petugas'
            ],
            [
                'name'  => 'pemilih',
                'description'  =>  'Pemilih'
            ]
        ];
        $this->db->table('auth_groups')->insertBatch($data);
    }
}
