<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name" => "achref",
                "email" => "achref@gmail.com",
                "role"=>"admin",
                "password" => Hash::make('20202020')
            ],
            [
                "name" => "vendeuse",
                "role"=>"vendeuse",
                "email" => "vendeuse@gmail.com",
                "password" => Hash::make('20202020')
            ],
            [
                "name" => "client",
                "email" => "client@gmail.com",
                "role"=>"client",
                "password" => Hash::make('20202020')
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
}
}