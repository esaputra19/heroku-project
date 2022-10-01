<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Learning;
use Illuminate\Support\Facades\DB;

class LearningTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('learnings')->insert([
            'hari' => 'senin',
        	'mentor' => 'Joni',
        	'judul' => 'Pengenalan Golang',
        	'materi' => 'Golang',
        	'occupation' => 'Programmer',
            'link' => 'http://www.google.com/sxsfa123xacsa/',
        ]);
    }
}
