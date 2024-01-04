<?php

use Illuminate\Database\Seeder;
use App\Klasifikasi;

class KlasifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Klasifikasi::create([
            'klasifikasi' => '-',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Klasifikasi::create([
            'klasifikasi' => 'Lingkungan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Klasifikasi::create([
            'klasifikasi' => 'Kesejahteraan Sosial',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Klasifikasi::create([
            'klasifikasi' => 'Biro Hukum',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Klasifikasi::create([
            'klasifikasi' => 'Jaringan Dokumentasi dan Informasi Hukum (JDIH)',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
