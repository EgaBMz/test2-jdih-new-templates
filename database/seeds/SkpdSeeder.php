<?php

use Illuminate\Database\Seeder;
use App\Skpd_pemrakarsa;

class SkpdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skpd_pemrakarsa::create([
            'skpd_pemrakarsa' => '-',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Skpd_pemrakarsa::create([
            'skpd_pemrakarsa' => 'Bagian Pemerintahan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Skpd_pemrakarsa::create([
            'skpd_pemrakarsa' => 'Bagian Hukum',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Skpd_pemrakarsa::create([
            'skpd_pemrakarsa' => 'Dinas Perhubungan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Skpd_pemrakarsa::create([
            'skpd_pemrakarsa' => 'Biro Hukum',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
