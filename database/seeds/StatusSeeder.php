<?php

use Illuminate\Database\Seeder;
use App\Status_peraturan;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status_peraturan::create([
            'status_peraturan' => 'Berlaku',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Status_peraturan::create([
            'status_peraturan' => 'Dicabut',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Status_peraturan::create([
            'status_peraturan' => 'Mencabut',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Status_peraturan::create([
            'status_peraturan' => 'Diubah',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Status_peraturan::create([
            'status_peraturan' => 'Mengubah',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
