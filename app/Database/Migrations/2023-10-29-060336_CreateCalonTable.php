<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCalonTable extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type'           => 'INT',
                    'constraint'     => 3,
                    'unsigned'       => true,
                    'auto_increment' => true,
                ],
                'nama' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ],
                'tanggal_lahir' => [
                    'type'          => 'DATE',
                ],
                'visi' => [
                    'type'          => 'TEXT',
                ],
                'misi' => [
                    'type'          => 'TEXT',
                ],
                'created_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ],
                'updated_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ],
                'deleted_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ]
            ]
        );
        $this->forge->addKey('id', true, true);
        $this->forge->createTable('calon', true);
    }

    public function down()
    {
        $this->forge->dropTable('calon', true);
    }
}
