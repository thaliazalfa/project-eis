<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DanaDaruratSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'bulan' => 'Januari',
            'pengeluaran_tetap'    => 200000,
            'pengeluaran_tambahan'    => 100000,
            'dana_darurat'    => 1500000,
        ];

        // Simple Queries
        $this->db->table('danaDarurat')->insert($data);
        
        $data = [
            'bulan' => 'Januari',
            'pengeluaran_tetap'    => 200000,
            'pengeluaran_tambahan'    => 100000,
            'dana_darurat'    => 1500000,
        ];
        // Using Query Builder
        $this->db->table('danaDarurat')->insert($data);
    }
}
