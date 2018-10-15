<?php

use Illuminate\Database\Seeder;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name'=>'Admin', 'email' => 'admin@admin.com', 'password'=>bcrypt('admin123456'), 'referal_token' => '123', 'is_kyc' => 1, 'address'=>'admin', 'role' => 2
        ]);
    }
}
