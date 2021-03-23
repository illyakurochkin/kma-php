<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'id' => 1,
            'author' => 'Ivanov',
            'title' => 'Addicted to murders',
            'year' => 2018
        ]);

        DB::table('books')->insert([
            'id' => 2,
            'author' => 'Petrov',
            'title' => 'The art of web programming',
            'year' => 1901
        ]);

        DB::table('books')->insert([
            'id' => 3,
            'author' => 'Sidorov',
            'title' => 'How to cheat',
            'year' => 1515
        ]);
    }
}
