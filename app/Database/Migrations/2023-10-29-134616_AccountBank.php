<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AccountBank extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_pemilik' => [
                'type'           => 'VARCHAR',
                'constraint'     => 255,
            ],
            'nomor_rekening' => [
                'type'           => 'VARCHAR',
                'constraint'     => 20,
            ],
            'saldo' => [
                'type'           => 'DECIMAL',
                'constraint'     => '10,2',
                'default'        => 0.00,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('account_bank');
    }

    public function down()
    {
        //
        $this->forge->dropTable('account_bank');
    }
}
