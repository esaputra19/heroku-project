<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scores')->insert([
            'siswa' => 'fransciskus kristus',
            'harian' => 80,
            'uts' => 70,
            'uas' => 90,
            'kehadiran' => 80,
        ]);
    }
}
