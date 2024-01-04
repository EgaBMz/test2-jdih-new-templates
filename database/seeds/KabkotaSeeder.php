<?php

use Illuminate\Database\Seeder;
use App\Kab_kota;

class KabkotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kab_kota::create([
            'kab_kota' => 'Kota Madiun',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
