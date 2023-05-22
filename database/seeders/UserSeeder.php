<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

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
                'name' => 'Tom Verhoeven',
                'email' => 'verhoeven.t@gmail.com',
                'password' => Hash::make('AccijnzenAdmin'),
            ],
            [
                'name' => 'Killian',
                'email' => 'killiandelmoitie@hotmail.com',
                'password' => Hash::make('AccijnzenAdmin'),
            ],
        ];

        // Insert the users into the database
        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }
    }
}
