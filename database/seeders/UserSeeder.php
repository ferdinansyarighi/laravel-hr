<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'          => 'Rudi Irsyad',
                'email'         => 'rudi@gmail.com',
                'password'      => bcrypt('rudi123'),
                'level'         => 'admin',
                'active_until'  => Carbon::now()
            ],
            [
                'name'          => 'Intan Tania',
                'email'         => 'intan@gmail.com',
                'password'      => bcrypt('intan123'),
                'level'         => 'user',
                'active_until'  => Carbon::now()
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
