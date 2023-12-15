<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pemberangkatan extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'bandara_asal' => 'Bandara A',
                'bandara_tujuan' => 'Bandara B',
                'tanggal_keberangkatan' => '2023-11-01',
                'jam_keberangkatan' => '14:30:00',
                'nomor_penerbangan' => 'ABC123',
            ],
            // Tambahkan data lainnya sesuai kebutuhan.
        ];

        // Memasukkan data ke dalam tabel.
        $this->db->table('departures')->insertBatch($data);
    }
}
