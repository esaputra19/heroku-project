<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
for ($i = 1; $i <= 50; $i++) {
    DB::table('users')->insert(
        [
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => $faker->password,
            'avatar' => $faker->imageUrl('https://source.unsplash.com/random', 640, 480 ),
            'occupation' => $faker->jobTitle,
            'phone' => $faker->numberBetween(8000, 9000),
            'address' => $faker->address,
            'role' => 'user',
            'remember_token' => $faker->uuid,
        ]
    );
}


    }
}
