<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTpsColumn extends Migration
{
    public function up()
    {

        $fields = [
            'id_tps' => [
                'type'      => 'INT',
                'constraint' => 3,
                'unsigned'  => TRUE,
                'null'            => TRUE
            ],
            'CONSTRAINT tps_ibfk_1 FOREIGN KEY(`id_tps`) REFERENCES `tps`(`id`)'
        ];
        $this->forge->addColumn('users', $fields);
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropForeignKey('id_tps', 'tps_ibfk_1');
        $this->forge->dropColumn('users', 'id_tps');
    }
}
