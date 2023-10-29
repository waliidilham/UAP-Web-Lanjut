<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePemiluTable extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                    'auto_increment' => true,
                ],
                'nik' => [
                    'type'           => 'INT',
                    'constraint'     => 16,
                    'unsigned'       => true,
                ],
                'id_paslon' => [
                    'type'           => 'INT',
                    'constraint'     => 3,
                    'unsigned'       => true,
                ],
                'id_tps' => [
                    'type'           => 'INT',
                    'constraint'     => 3,
                    'unsigned'       => true,
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
        $this->forge->addForeignKey('nik', 'user', 'nik');
        $this->forge->addForeignKey('id_paslon', 'calon', 'id');
        $this->forge->addForeignKey('id_tps', 'tps', 'id');
        $this->forge->createTable('pemilu', true);
    }

    public function down()
    {
        $this->forge->dropTable('pemilu', true);
    }
}
