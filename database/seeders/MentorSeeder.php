<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mentor;
use Illuminate\Support\Facades\DB;

class MentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mentors')->insert([
            'nama_mentor' => 'Ridwan Ardiansyah',
            'umur' => 24,
            'occupation' => 'Software Engineer',
            'alumni' => 'Universitas Padjajaran',
            'lastwork' => 'PT.Communter Line Indonesia',
            'job' => 'Project Manager',
            'linkedin' => 'https://www.linkedin.com/ridwan-ardiansyah'
        ]);

        DB::table('mentors')->insert([
            'nama_mentor' => 'Deni Triyanto',
            'umur' => 24,
            'occupation' => 'Back-End Engineer',
            'alumni' => 'Universitas Pasuruan',
            'lastwork' => 'PT.Tokopedia Tbk.',
            'job' => 'Scrum Master',
            'linkedin' => 'https://www.linkedin.com/Deni-Triyanto'
        ]);
    }
}
