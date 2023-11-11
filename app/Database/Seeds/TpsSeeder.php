<?php

namespace App\Database\Seeds;

use App\Models\TpsModel;
use CodeIgniter\Database\Seeder;

class TpsSeeder extends Seeder
{
    public function run()
    {
        $tpsModel = new TpsModel();
        $tpsModel->save([
            'nama_tps' => 'Dusun Kertanegara',
        ]);
    }
}
