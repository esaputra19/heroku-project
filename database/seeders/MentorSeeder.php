<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mentor;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MentorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mentor::create([
            'nama ' => ' Joni Silalahi',
            'email ' => 'jony@codingerscourse.com',
            'umur' => 21,
            'nik ' =>321606020202001,
            'telp ' =>'081221212112',
            'addrs ' =>'Perumahan wonosari Blok A12',
            'passwd ' =>'joni123',

        ]);
    }
}
