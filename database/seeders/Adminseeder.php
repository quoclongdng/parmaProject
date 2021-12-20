<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->truncate();

        DB::table('users')->insert([
            ['email' => 'admin@master.com', 'password' => bcrypt('123123123'), 'first_name' => 'Admin' , 'last_name' => 'Master' , 'is_admin' => 1 , 'is_master' => 1 , 'gender' => 1],
        ]);
    }
}
