<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MentorUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'name' => 'joni',
        'email' => 'joni@codingercourse.com',
        'email_verified_at' => date('Y-m-d H:i:s', time()),
        'password' => \bcrypt('masjoni'),
        'role' =>'mentor',
        ]);
    }
}
