<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(admin::class);
        $this->call(IndexTableSeeder::class);
        // $this->call(AdvisorSeeder::class);
        // $this->call(PartnerSeeder::class);
    }
}
