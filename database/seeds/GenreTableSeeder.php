<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = [
            'Absurdist',
            'surreal',
            'whimsical',
            'Action',
            'Adventure',
            'Comedy',
            'Crime',
            'Drama',
            'Fantasy',
            'Historical',
            'Historical fiction',
            'Horror',
            'Magical realism',
            'Mystery',
            'Paranoid Fiction',
            'Philosophical',
            'Political',
            'Romance',
            'Saga',
            'Satire',
            'Science fiction',
            'Social',
            'Speculative',
            'Thriller',
            'Urban',
            'Western',
            'Animation',
            'Live-action scripted',
            'Live-action unscripted',
            'Other',
        ];

        foreach ($genres as $item) {
            DB::table('genres')->insert([
                [
                    'name' => $item,
                ],
            ]);
        }
    }
}
