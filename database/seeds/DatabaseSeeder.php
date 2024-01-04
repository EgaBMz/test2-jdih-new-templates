<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(JenisdokumenSeeder::class);
        $this->call(KabkotaSeeder::class);
        $this->call(BahasaSeeder::class);
        $this->call(KlasifikasiSeeder::class);
        $this->call(SkpdSeeder::class);
        $this->call(StatusSeeder::class);
    }
}
