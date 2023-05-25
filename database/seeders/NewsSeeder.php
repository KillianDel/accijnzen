<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'titel' => 'Default',
            'content' => 'Beschrijving',
            'cover_image' => 'notworkingpicture.jpg',
            'created_at' => now(),
       ]);
    }
}
