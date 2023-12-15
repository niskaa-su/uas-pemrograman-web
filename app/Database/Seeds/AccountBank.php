<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AccountBank extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'nama_pemilik' => 'John Doe',
                'nomor_rekening' => '1234567890',
                'saldo' => 1000.00,
            ],
            // Tambahkan data lainnya sesuai kebutuhan.
        ];

        // Memasukkan data ke dalam tabel.
        $this->db->table('account_bank')->insertBatch($data);
    }
}
