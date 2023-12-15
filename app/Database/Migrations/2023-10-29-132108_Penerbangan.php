<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penerbangan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'maskapai' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
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
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('penerbangan');
    }

    public function down()
    {
        //
        $this->forge->dropTable('penerbangan');
    }
}
