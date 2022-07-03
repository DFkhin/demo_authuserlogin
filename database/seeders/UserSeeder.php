<?php

namespace Database\Seeders;

Use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Franklin Pogoy',
                'email' => 'fpogs30@yahoo.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('danielsternad')
            ],
            [
                'name' => 'josabel Dugyot',
                'email' => 'jos_dugyot@yahoo.com',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('danielsternad')
            ],
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
