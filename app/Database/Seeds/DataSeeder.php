<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataSeeder extends Seeder
{
    public function run()
    {
        $this->call('UsersSeeder');
        $this->call('AuthGroups');
        $this->call('AuthGroupUsers');
    }
}
