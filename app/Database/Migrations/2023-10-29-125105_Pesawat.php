<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pesawat extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'bandara_asal' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'bandara_tujuan' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'tanggal_keberangkatan' => [
                'type'           => 'DATE',
            ],
            'jam_keberangkatan' => [
                'type'           => 'TIME',
            ],
            'nomor_penerbangan' => [
                'type'           => 'VARCHAR',
                'constraint'     => 10,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('departures');
    }

    public function down()
    {
        //
        $this->forge->dropTable('departures');
    }
}
