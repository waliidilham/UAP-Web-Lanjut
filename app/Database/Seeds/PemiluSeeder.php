<?php

namespace App\Database\Seeds;

use App\Models\PemiluModel;
use CodeIgniter\Database\Seeder;

class PemiluSeeder extends Seeder
{
    public function run()
    {
        $pemiluModel = new PemiluModel();
        $pemiluModel->save([
            'id_users' => 4,
            'id_paslon' => 1,
            'id_tps' => 1,
        ]);
    }
}
