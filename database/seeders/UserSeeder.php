<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\User;

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
                'lname' => 'Salvatore',
                'fname' => 'Damon',
                'username' => 'igotelena',
                'password' => bcrypt('thisisapassword'),
                'email' => 'damon_s@gmail.com',
                'email_verified_at' => Carbon::now()
            ],
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
