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
            'foto' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Donald_Trump_official_portrait.jpg/473px-Donald_Trump_official_portrait.jpg'
        ]);
        $calonModel->save([
            'nama' => 'Alain Berset',
            'tanggal_lahir' => '1972-04-9',
            'visi' => 'Membangun Indonesia dari pinggiran dengan memperkuat ekonomi kerakyatan',
            'misi' => '1. Meningkatkan kualitas hidup manusia Indonesia dengan membangun infrastruktur yang memadai dan merata ke seluruh pelosok negeri',
            'foto' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Alain_Berset_%282023%29.jpg/220px-Alain_Berset_%282023%29.jpg'
        ]);
        $calonModel->save([
            'nama' => 'Michael D. Higgins',
            'tanggal_lahir' => '1941-04-2',
            'visi' => 'Membangun Indonesia dari pinggiran dengan memperkuat ekonomi kerakyatan',
            'misi' => '1. Meningkatkan kualitas hidup manusia Indonesia dengan membangun infrastruktur yang memadai dan merata ke seluruh pelosok negeri',
            'foto' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/President_Higgins%27s_visit_FINIRISH_BATT_HQ%2C_Lebanon_%28cropped%29.jpg/220px-President_Higgins%27s_visit_FINIRISH_BATT_HQ%2C_Lebanon_%28cropped%29.jpg'
        ]);
    }
}
