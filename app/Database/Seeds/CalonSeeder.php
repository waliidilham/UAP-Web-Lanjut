<?php

namespace App\Database\Seeds;

use App\Models\CalonModel;
use CodeIgniter\Database\Seeder;

class CalonSeeder extends Seeder
{
    public function run()
    {
        $calonModel = new CalonModel();
        $calonModel->save([
            'nama' => 'Uzumaki Naruto',
            'tanggal_lahir' => '1961-06-21',
            'visi' => 'Membangun Indonesia dari pinggiran dengan memperkuat ekonomi kerakyatan',
            'misi' => '1. Meningkatkan kualitas hidup manusia Indonesia dengan membangun infrastruktur yang memadai dan merata ke seluruh pelosok negeri',
        ]);
    }
}
