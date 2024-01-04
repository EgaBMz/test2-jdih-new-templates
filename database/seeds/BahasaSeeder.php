<?php

use Illuminate\Database\Seeder;
use App\Bahasa;

class BahasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bahasa::create([
            'bahasa' => 'Indonesia',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Bahasa::create([
            'bahasa' => 'Inggris',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
