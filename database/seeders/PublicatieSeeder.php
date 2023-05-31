<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PublicatieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publicatie')->insert([
            'name' => 'Default',
            'subject' => 'Onderwerp',
            'path' => 'notworkingpicture.jpg',
       ]);
    }
}
