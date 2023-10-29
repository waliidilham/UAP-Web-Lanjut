<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTpsTable extends Migration
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
                'nama_tps' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '50',
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
        $this->forge->createTable('tps', true);
    }

    public function down()
    {
        $this->forge->dropTable('tps', true);
    }
}
