<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CursusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursus')->insert([
            'name' => 'Default',
            'priority' => '0',
            'subject' => 'Onderwerp',
            'description' => 'Beschrijving',
            'price' => '0',
            'photo' => 'notworkingpicture.jpg',
            'created_at' => now(),
       ]);
    }
}
