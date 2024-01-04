<?php

use Illuminate\Database\Seeder;
use App\Jenis_dokumen;

class JenisdokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jenis_dokumen::create([
            'jenis_peraturan' => 'Peraturan Daerah',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Jenis_dokumen::create([
            'jenis_peraturan' => 'Peraturan Walikota',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Jenis_dokumen::create([
            'jenis_peraturan' => 'Keputusan Walikota',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Jenis_dokumen::create([
            'jenis_peraturan' => 'Instruksi Walikota',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
