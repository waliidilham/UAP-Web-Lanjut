<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUserTable extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'nik' => [
                    'type'           => 'INT',
                    'constraint'     => 16,
                    'unsigned'       => true,
                ],
                'nama' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
                ],
                'tanggal_lahir' => [
                    'type'          => 'DATE',
                ],
                'role' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '10',
                ],
                'status' => [
                    'type'          => 'INT',
                    'constraint'    => 2,
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
        $this->forge->addKey('nik', true, true);
        $this->forge->createTable('user', true);
    }

    public function down()
    {
        $this->forge->dropTable('user', true);
    }
}
