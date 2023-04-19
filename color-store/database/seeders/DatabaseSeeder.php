<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Ana',
            'email' => 'ana@mail.com',
            'password' => Hash::make('12345678'),
        ]);

        foreach([
            'Mono Color',
            'Stereo Pallete',
            'Three Pastels',
            'Four Seasons',
            'Five Stars'
        ] as $count => $title) {
            DB::table('cats')->insert([
                'title' => $title,
                'colors_count' => $count + 1,
            ]);
        }
    }
}