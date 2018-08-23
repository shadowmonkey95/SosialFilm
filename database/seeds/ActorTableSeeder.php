<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actors = [
            'Aaron Eckhart',
            'Aaron Paul',
            'Aaron Taylor-Johnson',
            'Adam Sandler',
            'Adewale Akinnuoye-Agbaje',
            'Adrien Brody',
            'Aidan Gillen',
            'Al Pacino',
            'Alan Arkin',
            'Andrew Garfield',
            'Anthony Mackie',
            'Arnold Schwarzenegger',
            'Ben Foster',
            'Ben Stiller',
            'Benedict Cumberbatch',
        ];

        foreach ($actors as $item) {
            DB::table('actors')->insert([
                [
                    'name' => $item,
                    'infor' => 'Đang cập nhật thông tin',
                ],
            ]);
        }
    }
}
