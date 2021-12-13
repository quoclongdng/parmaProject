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
        DB::table('admin_users')->delete();

        DB::table('admin_users')->truncate();

        DB::table('admin_users')->insert([
            ['email' => 'admin@master.com', 'password' => bcrypt('123123123'), 'full_name' => 'Admin Master', 'is_admin' => 1],
        ]);
    }
}
