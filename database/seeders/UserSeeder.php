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
                'name'          => 'Admin Auroshine',
                'url'           => 'venni-ferdi',
                'email'         => 'cs@aurorashine.id',
                'password'      => bcrypt('admin123'),
                'level'         => 'admin',
                'gender'        => 'F',
                'active_until'  => Carbon::now()
            ],
            [
                'name'          => 'User Auroshine',
                'url'           => 'ferdi-venni',
                'email'         => 'support@aurorashine.id',
                'password'      => bcrypt('user123'),
                'level'         => 'user',
                'gender'        => 'M',
                'active_until'  => Carbon::now()
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
